<?php

include_once '../vendor/autoload.php';

use DFSClientV3\DFSClient;
use DFSClientV3\Models\TestModel;
use DFSClientV3\Services\EntityCreator\EntityCreator;
use DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Platforms\AdsTrafficByPlatformsLive;
use DFSClientV3\Models\KeywordsDataApi\Keywords_For_Keyword\KeywordsForKeywordLive;
use DFSClientV3\Models\SERP_API\GetAdvancedSerpResultsById;
use \DFSClientV3\Models\SERP_API\GetSerpHtmlResultsByTaskId;
use DFSClientV3\Models\CommonApi\User;

$client = new DFSClient();
$client->setConfig('C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\public\config.php');
$model = new User();

$res = $model->get();//->setTaskId('10111513-2974-0066-0000-26927c31ec39')->setSeType('organic')->setSe('google');




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
//s
//}
//$res = \DFSClientV3\Models\SERP_API\SettingSerpTasks::getAfterMerge($pool);



dd($res);



//foreach ($res->tasks as $task)
//{
//    foreach ($task->result as $result)
//    {
//        foreach ($result->items as $item)
//        {
//            /**
//             * @var $item
//             */
//            if (is_a($item, '\DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsAnswer_box'))
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
$cr = new EntityCreator('C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\src\DFSClientV3\Entity\Custom');

$cr->generateByModel($res);
//$json = $model->getAsJson();

//$mapper = new \DFSClientV3\Models\DataMapper('TestModel',$json);

//$test = $mapper->paveData($json, null);
//
//dd($test);
