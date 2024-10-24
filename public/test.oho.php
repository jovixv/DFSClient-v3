<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once '../vendor/autoload.php';

use DFSClientV3\DFSClient;
use DFSClientV3\Models\CommonApi\User;
use DFSClientV3\Services\EntityCreator\EntityCreator;
use DFSClientV3\Services\Logger\Logger;

$client = new DFSClient();
$client->setConfig('C:\OSPanel\domains\dfs-v3\public\config.php');

$model = new User();

//$logger = new Logger();
//$res = $model->setKeywords(["phone", "watch"])->setLanguageCode('en')->setLocationCode(2840)->get();
//$res = $model->setKeyword('covid')->setLanguageCode('en')
//    ->setLocationCode(2840);
$res = $model->get();
//$res = $model->setCategoryCodes([12191, 12193])->setLanguageCode('en')->setLocationCode(2840)->get();

dd($res);
$cr = new EntityCreator('C:\OSPanel\domains\dfs-v3\src\DFSClient\Entity\Custom');
//
$cr->generateByModel($res);

dd($res);
//foreach ($res->getResultsByPostID('post ID 99')[0]->items as $item){
//    if ($item instanceof \DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsPeople_also_ask)
//    dd($item);
//}

//$logger->pushMessage('Test message');

//$res = $model->get();//->setTaskId('10111513-2974-0066-0000-26927c31ec39')->setSeType('organic')->setSe('google');

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

//dd($res);

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
//$cr = new EntityCreator('C:\OSPanel\domains\dfs-v3\src\DFSClient\Entity\Custom');
//
//$cr->generateByModel($res);
//dd('stop');
//$json = $model->getAsJson();
//
//$mapper = new \DFSClientV3\Models\DataMapper('KeywordsForSiteLive',$json, $model->getPathToMainData());
//
//$test = $mapper->paveData($json, null);
//
//dd($test);
