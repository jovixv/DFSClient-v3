<?php


namespace DFSClientV3\Services\Logger\Drivers;

use DFSClientV3\Services\Logger\Notifications\NotificationDriverContract;
use \Exception as NotificationDriverNotFound;
use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Services\Logger\Message\MessageInterface;

class InternalDriver implements LoggerDriverContract
{

    public const DFS_PATH_TO_SYSTEM_FILE = __DIR__.'/../SystemLogNotifications.txt';
    /**
     * @param MessageInterface $message
     * @param Application $application
     * @throws NotificationDriverNotFound
     */
    public function pushMessage(MessageInterface $message, Application $application)
    {
        $config = $application->getConfig();
        $notificationsDriver = $config['logger']['notificationDrivers'];
        $atLeastOneNotificationWasProcessed = false;

       if (!$this->isDuplicatedMessage($message, $application)) {
           /**
            * @var NotificationDriverContract[] $notificationsDriver
            */
           foreach ($notificationsDriver as $notificationDriver) {
               if (!class_exists($notificationDriver))
                   throw new NotificationDriverNotFound('Notification driver not found, check your config');

               $isExecuted = (new $notificationDriver($message, $application))->run();

               if ($isExecuted === true)
                   $atLeastOneNotificationWasProcessed = true;
           }

           if ($atLeastOneNotificationWasProcessed == true)
               $this->writeHashToSystemFile($message);
       }

       return;
    }

    /**
     * @param MessageInterface $message
     * @param Application $application
     * @return bool
     */
    public function isDuplicatedMessage(MessageInterface $message, Application $application): bool
    {
        $hash = md5($message->getLevel().$message->getFile().$message->getMessageTitle().$message->getDFSVersion());

        if (file_exists(realpath(self::DFS_PATH_TO_SYSTEM_FILE))){
            $systemLogNotification = file(realpath(self::DFS_PATH_TO_SYSTEM_FILE), FILE_SKIP_EMPTY_LINES);
            $flipsArray = array_flip($systemLogNotification);
            if (isset($flipsArray[$hash.PHP_EOL])){
                return true;
            }
        }
        return false;
    }

    /**
     * @param MessageInterface $message
     * @return bool|int
     */
    private function writeHashToSystemFile(MessageInterface $message)
    {
       $hash = md5($message->getLevel().$message->getFile().$message->getMessageTitle().$message->getDFSVersion());
       $pathToSystemFile = realpath(self::DFS_PATH_TO_SYSTEM_FILE);
       // 25 mb
       if (filesize($pathToSystemFile) > 25000000 )
           unlink($pathToSystemFile);

       $wroteBytes =  file_put_contents($pathToSystemFile, $hash.PHP_EOL, LOCK_EX | FILE_APPEND);

       if ($wroteBytes !== false)
           return true;

       return $wroteBytes;
    }
}
