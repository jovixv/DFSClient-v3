<?php


namespace DFSClientV3\Services\Logger;

use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Services\Logger\Drivers\LoggerDriverContract;
use DFSClientV3\Services\Logger\Message\MessageInterface;
use \Exception as LoggerDriverException;

class Logger
{

    /**
     * @var Application
     */
    protected $application;

    /**
     * @var
     */
    private static $driver = null;

    /**
     * Logger constructor.
     */
    public function __construct()
    {
        $this->application = Application::getInstance();
    }

    /**
     * @param string|MessageInterface $message
     * @throws LoggerDriverException
     */
    public function pushMessage($message, string $title = '', string $file = '', string $level = 'INFO',
                                string $dfsVesrion = '', $localVesrion = '')
    {
        if ($messageClass = $this->application->getConfig()['logger']['run'] === true){
            if (($message instanceof MessageInterface) === false){
                $messageClass = $this->application->getConfig()['logger']['messageClass'];

                if (!class_exists($messageClass))
                    throw new LoggerDriverException('messageClass not found, check your config');

                $message = new $messageClass($message, $title, $file, $level, $dfsVesrion, $localVesrion);
            }

            $this->getDriver()->pushMessage($message, $this->application);
        }

    }


    /**
     * @return LoggerDriverContract
     * @throws LoggerDriverException
     */
    private function getDriver(): LoggerDriverContract
    {
        $config = $this->application->getConfig();

        if (self::$driver !== null){
            return self::$driver;
        }

        $driverClassName = $config['logger']['driver'] ?? null;

        if ($driverClassName !== null) {
            self::$driver = new $driverClassName();
            return self::$driver;
        }

        throw new LoggerDriverException('Logger driver not found, check your config, logger->driver');
    }
}
