<?php

namespace DFSClientV3;

use DFSClientV3\Bootstrap\Application;
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
    }

    /**
     * @param string|array|null $path
     * @throws DFSClientException
     */
    public function setConfig($path = null)
    {
        $loader = require __DIR__. '../../../../../../vendor/autoload.php'; // path for package
  //      $loader = require __DIR__. '../../../vendor/autoload.php'; // path for local development
        $configFile = [];

        if ($this->isLaravelInstalled()) {

            if (function_exists('config')){
                if (is_array($path))
                    $configFile = $path;
                if(is_string($path))
                    $configFile = config($path);
                if (is_null($path))
                    $configFile = include 'Config/dfsConfig.php';
            }

        }else{
            if ($path) {
                if (!file_exists($path))
                    throw new DFSClientException('Config file not found, check your path, current path: '.__DIR__);

                $configFile = include $path;
            }

            if (!$path)
                $configFile = include 'Config/dfsConfig.php';

        }

        $this->application->setConfig($configFile);

        // add extra psr path.
        $extraPaths = $this->application->getConfig()['extraEntitiesPaths'];
        foreach ($extraPaths as $path) {
            $loader->addPsr4('DFSClientV3\\Entity\\Custom\\', $path);
        }

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
