<?php

 return $config = [

     'DATAFORSEO_LOGIN'       => 'Your Login',
     'DATAFORSEO_PASSWORD'    => 'PWD',

     'timeoutForEachRequests' => 20,
     'apiVersion'             => '/v3/',
     'url'                    => 'https://devapi3.dataforseo.com',
     'headers'                => ['Content-Type' => 'application/json', 'Connection' => 'close', 'Accept-Encoding'=>'gzip', 'User-Agent'=>'DFS'],

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
     'modelsPath' => 'C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\public',
 ];
