<?php

namespace DFSClientV3\Bootstrap;

use \Exception as ApplicationException;

class Application
{

    /**
     * @var Application|null
     */
    private static $instance = null;

    /**
     * @var array
     */
    protected $config;

    /**
     * @throws ApplicationException
     */
    public function __wakeup()
    {
        throw  new ApplicationException('DFSClient is not support serialize');
    }

    /**
     * @throws ApplicationException
     */
    public function __clone()
    {
        throw  new ApplicationException('DFSClient can not be cloned');
    }

    /**
     * @return Application
     */
    public static function getInstance(): Application
    {
        if (!self::$instance)
            self::$instance = new static();

        return self::$instance;
    }

    /**
     * @param $config
     * @throws ApplicationException
     */
    public function setConfig($config): void
    {

        if (empty($config))
            throw new ApplicationException('Config array can not be empty');

        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }


}
