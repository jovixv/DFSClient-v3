<?php

return $config = [

    'DATAFORSEO_LOGIN'       => 'Your Login',
    'DATAFORSEO_PASSWORD'    => 'You password',

    'timeoutForEachRequests' => 10,
    'apiVersion'             => '/v3/',
    'url'                    => 'https://api.dataforseo.com',
    'sandboxUrl'             => 'https://sandbox.dataforseo.com',
    'headers'                => ['Content-Type' => 'application/json', 'Connection' => 'close', 'Accept-Encoding'=>'gzip', 'User-Agent'=>'DFSV3-serp'],

    //schema for payload
    'payloadData'=> [ // keys: payloadData and json are required for script. "data" need for DFSApi
        'json'=> [
            'data'=> [
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
        'your full path to extra entity'
    ],


    // Logger, will write errors, warnings or info related with the DFS API
    // At now available two drivers
    'logger' => [
        'run' => false, // switch_on = true, switch_off = false

        // driver for laravel queue system - LaravelQueueDriver::class
        'driver' => \DFSClientV3\Services\Logger\Drivers\InternalDriver::class,
        'notificationDrivers' => [
            \DFSClientV3\Services\Logger\Notifications\FileNotification::class,
          //  \DFSClientV3\Services\Logger\Informers\SlackNotification::class
        ],
        'messageClass' => \DFSClientV3\Services\Logger\Message\LoggerMessage::class,
        'logFilePath'  => 'C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\public\testLog'
    ]
];
