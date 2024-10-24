<p align="center">  <a href="https://docs.dataforseo.com/v3">  <img src="https://dataforseo.com/wp-content/uploads/2022/04/ukr-logo_429.png" alt="logo"/>  </a>  </p>



This is a PHP client library for the DataForSEO API. The library describes models for working with API endpoints. As new endpoints are added, the library will be updated.

### Requirements

PHP 8.3 and later

### Installation

`composer require jovix/dataforseo-clientv3`

### Usage
In the simple version, your application should look like this:
```
public
   config.php
   index.php
vendor
 composer.json
 composer.lock
```

The `config.php` file contains:
```php
<?php  
return $config = [  
   'DATAFORSEO_LOGIN' => 'login',  
   'DATAFORSEO_PASSWORD' => 'password',  
   'timeoutForEachRequests' => 120,  
   'apiVersion' => '/v3/',  
   'url' => 'https://api.dataforseo.com',  
 // You can set extra paths for Entities  
 // For all entity we use namespace: DFSClientV3\Entity\Custom
 // Last index will have the priority
   'extraEntitiesPaths' => [  
      'your full path to extra entity',  
      'your full path to extra entity'  
  ],  
];
```
The `index.php` file contains:
```php
<?php  
include_once '../vendor/autoload.php';  
  
$client = new DFSClientV3\DFSClient();  
$client->setConfig('config.php');  
  
// You will receive detailed information about your API usage  
$model = new \DFSClientV3\Models\CommonApi\User();  
// You can get an object whose essence is described in the appropriating entity 
// (attention, may contain outdated data)
$res = $model->get();  
print_r($res);  
// You can get the JSON answer  
$res = $model->getAsJson();  
print_r($res);  
  
  
// You will receive SERP data specific to the indicated keyword, search engine, and location parameters
$model = new \DFSClientV3\Models\SerpApi\SettingSerpLiveAdvanced();  
$model->setSe("google");  
$model->setSeType("organic");  
$model->setKeyword("seo");  
$model->setLocationCode(2840);  
$model->setLanguageCode("en");  
$res = $model->getAsJson();  
print_r($res);
```

### Documentation for API
https://docs.dataforseo.com/v3
