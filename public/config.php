<?php

use DFSClientV3\Services\Logger\Drivers\InternalDriver;
use DFSClientV3\Services\Logger\Message\LoggerMessage;
use DFSClientV3\Services\Logger\Notifications\FileNotification;

return $config = [

    'DATAFORSEO_LOGIN'    => 'login',
    'DATAFORSEO_PASSWORD' => 'password',

    'timeoutForEachRequests' => 30,
    'apiVersion'             => '/v3/',
    'url'                    => 'https://api.dataforseo.com',
    'headers'                => [
        'Content-Type'    => 'application/json',
        'Connection'      => 'close',
        'Accept-Encoding' => 'gzip',
        'User-Agent'      => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36',
//        'User-Agent'=>'DFSV3-serp'
    ],

    //schema for payload
    'payloadData' => [ // keys: payloadData and json are required for script. "data" need for DFSApi
        'json' => [
            'data' => [
                [
                    // data
                ],
            ],
        ],
    ],

    // You can set extra paths for Entities. It will be violate the psr4 standard. (for all entity we use namespace: DFSClientV3\Entity\Custom)
    // last index will have the priority. For example, if you have a same Entity name in different directories, DFSClient will use entity, loaded from last path.
    'extraEntitiesPaths' => [
        'your full path to extra entity',
        'your full path to extra entity',
    ],

    // Logger, will write errors, warnings or info related with the DFS API
    // At now available two drivers
    'logger' => [
        'run' => false, // switch_on = true, switch_off = false

        // driver for laravel queue system - LaravelQueueDriver::class
        'driver'              => InternalDriver::class,
        'notificationDrivers' => [
            FileNotification::class,
            //  \DFSClientV3\Services\Logger\Informers\SlackNotification::class
        ],
        'messageClass' => LoggerMessage::class,
        'logFilePath'  => 'C:\OSPanel\domains\dfs-v3\public\testLog',
    ],
];
