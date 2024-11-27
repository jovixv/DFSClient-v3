<?php
include_once '../vendor/autoload.php';

$client = new DFSClientV3\DFSClient();
$client->setConfig('config.php');

// You will receive detailed information about your API usage
$model = new \DFSClientV3\Models\CommonApi\User();
// You can get an object whose essence is described in the appropriating entity (attention, may contain not completely up-to-date data)
//$res = $model->get();
//print_r($res);
// You can get the JSON answer
$res = $model->getAsJson();
print_r($res);


// You will receive SERP for specific to the indicated keyword, search engine, and location parameters
//$model = new \DFSClientV3\Models\SerpApi\SettingSerpLiveAdvanced();
//$model->setSe("google");
//$model->setSeType("organic");
//$model->setKeyword("seo");
//$model->setLocationCode(2840);
//$model->setLanguageCode("en");
//$res = $model->getAsJson();
//print_r($res);
