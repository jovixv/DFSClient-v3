<?php

include_once '../vendor/autoload.php';

use DFSClient\DFSClient;
use DFSClient\Models\TestModel;
use DFSClient\Services\EntityCreator\EntityCreator;
use DFSClient\Models\KeywordsDataApi\Ads_Traffic_By_Platforms\AdsTrafficByPlatformsLive;
use DFSClient\Models\KeywordsDataApi\Keywords_For_Keyword\KeywordsForKeywordLive;
use DFSClient\Models\SERP_API\GetAdvancedSerpResultsById;
use \DFSClient\Models\SERP_API\GetSerpHtmlResultsByTaskId;

$client = new DFSClient();
$client->setConfig('C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\public\config.php');
$model = new GetAdvancedSerpResultsById();


$res = $model
    ->setSe('google')
    ->setSeType('organic')
    ->setTaskId('09251638-2974-0066-0000-67d1fd62e163')
    ->get();

// Create tasks with range postID.
//for($i=1; $i<10; $i++)
//{
//
//    $pool[$i] = clone $model->setSe("google")
//        ->setSeType('organic')
//        ->setLanguageCode('en')
//        ->setKey('seo'.$i)
//        ->setLocationCode(2840)
//        ->setPostID($i);
//
//}
//$res = \DFSClient\Models\SERP_API\SettingSerpTasks::getAfterMerge($pool);

dd($res);

//$res = $model;




//foreach ($res->tasks as $task)
//{
//    foreach ($task->result as $result)
//    {
//        foreach ($result->items as $item)
//        {
//            /**
//             * @var $item
//             */
//            if (is_a($item, '\DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsAnswer_box'))
//            {
//                dd($item);
//            }
//
//        }
//
//    }
//}

//
//
//$results = $res->getResultsByPostID(0);
//
//dd($results->items);
//
//foreach ($results->items as $item)
//{
//    dump($item->title);
//    dump($item->position_absolute);
//}
//
//
////$mainResults = $res->getResultsByPostID(0);
////
////foreach ($mainResults as $keywordItem)
////{
////    dump($keywordItem->key, $keywordItem->ms);
////}
////
//
//
//
//
$cr = new EntityCreator('C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\src\DFSClient\Entity\Custom');

$cr->generateByModel($res);
//$json = $model->getAsJson();

//$mapper = new \DFSClient\Models\DataMapper('TestModel',$json);

//$test = $mapper->paveData($json, null);
//
//dd($test);
