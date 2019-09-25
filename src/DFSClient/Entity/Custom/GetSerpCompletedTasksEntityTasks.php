<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\GetSerpCompletedTasksEntityParams;
use DFSClient\Entity\Custom\GetSerpCompletedTasksEntityResult;

class GetSerpCompletedTasksEntityTasks 
{    
    /**
    * @var null|string id;
    */
    public $id = null;        
    
    /**
    * @var null|string post_id;
    */
    public $post_id = null;        
    
    /**
    * @var null|integer status_code;
    */
    public $status_code = null;        
    
    /**
    * @var null|string status_message;
    */
    public $status_message = null;        
    
    /**
    * @var null|string time;
    */
    public $time = null;        
    
    /**
    * @var null|integer cost;
    */
    public $cost = null;        
    
    /**
    * @var null|integer result_count;
    */
    public $result_count = null;        
    
    /**
    * @var null|array path;
    */
    public $path = null;        
    
    /**
    * @var null|array data;
    */
    public $data = null;        
    
    /**
    * @var null|GetSerpCompletedTasksEntityParams params;
    */
    public $params = null;        
    
    /**
    * @var null|GetSerpCompletedTasksEntityResult[] result;
    */
    public $result = null;        
     
}