<?php

return $config = [

    'DATAFORSEO_LOGIN'       => 'Your LoginPATH',
    'DATAFORSEO_PASSWORD'    => 'Your PasswordPATH',

    'timeoutForEachRequests' => 10,
    'apiVersion'             => '/v3/',
    'url'                    => 'https://api.dataforseo.com',
    'headers'                => ['Content-Type' => 'application/json', 'Connection' => 'close', 'Accept-Encoding'=>'gzip', 'User-Agent'=>'DFSClient V3 ('.$config['DATAFORSEO_LOGIN'].')(gzip)'],

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

    // SYSTEM CONFIG
    'modelsPath' => 'C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\src\DFSClient\Entity\Custom',
];
