<?php


namespace DFSClientV3\Services\Logger\Notifications;


use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Services\Logger\Message\MessageInterface;

class FileNotification implements NotificationDriverContract
{

    /**
     * @var MessageInterface
     */
    protected $message;

    /**
     * @var Application
     */
    protected $application;

    /**
     * @var string $filePath
     */
    protected $filePath;

    /**
     * FileNotification constructor.
     * @param MessageInterface $message
     * @param Application $application
     */
    public function __construct(MessageInterface $message, Application $application)
    {
        $this->message = $message;
        $this->application = $application;
        $this->filePath = $this->application->getConfig()['logger']['logFilePath'];
    }

    /**
     * @return bool
     */
    public function run(): bool
    {
        if (file_exists($this->filePath) && is_writable($this->filePath)){
            $message = $this->message->getStructuredMessageAsString();
            // 25 mb
            if (filesize($this->filePath) > 25000000 )
                unlink($this->filePath);

           $wroteByte = file_put_contents($this->filePath, $message, FILE_APPEND | LOCK_EX);

            if ($wroteByte !== false)
                return true;

            return false;
        }

        return false;
    }
}
