<?php

namespace DFSClient;

use DFSClient\Bootstrap\Application;
use \Exception as DFSClientException;

class DFSClient
{

    /**
     * @var Application|null
     */
    public $application = null;

    /**
     * DFSClient constructor.
     * @param string|null $login
     * @param string|null $password
     * @param string|null $timeout
     * @param string|null $apiVersion
     * @param string|null $url
     * @param string|null $configPath
     * @throws DFSClientException
     */
    public function __construct(?string $login = null,
                                ?string $password = null,
                                ?string $timeout = null,
                                ?string $apiVersion = null,
                                ?string $url = null,
                                ?string $configPath = null)
    {
        $this->application = Application::getInstance();
        $this->setConfig($configPath);

        if ($login && $password) {
            $config = $this->application->getConfig();
            $config['DATAFORSEO_LOGIN'] = $login ?? $config['DATAFORSEO_LOGIN'];
            $config['DATAFORSEO_PASSWORD'] = $password ?? $config['DATAFORSEO_PASSWORD'];
            $config['timeoutForEachRequests'] = $timeout ?? $config['timeoutForEachRequests'];
            $config['apiVersion'] = $apiVersion ?? $config['apiVersion'];
            $config['url'] = $url ?? $config['url'];

            $this->application->setConfig($config);
        }

        $loader = require __DIR__. '../../../../../../vendor/autoload.php';

        $loader->setPsr4('DFSClient\\Entity\\Custom\\', $this->application->getConfig()['modelsPath']);

    }

    /**
     * @param string|null $path
     * @throws DFSClientException
     */
    public function setConfig(?string $path = null)
    {

        $configFile = [];

        if ($path)
        {
            if (!file_exists($path))
                throw new DFSClientException('Config file not found, check your path, current path: '.__DIR__);

            if ($this->isLaravelInstalled())
            {
                if (function_exists('config'))
                    $configFile = config('dfsConfig');
            }else{
                $configFile = include $path;
            }

        }

        if (!$path)
            $configFile = include 'Config/dfsConfig.php';

        $this->application->setConfig($configFile);
    }

    /**
     * If Laravel installed will return version.
     *
     * @return string|null
     */
    public function isLaravelInstalled(): ?string
    {
        $isLaravelVersion = null;

        if (function_exists('app')){
            $isLaravelVersion = app()->version();
        }

        return $isLaravelVersion;
    }

}
