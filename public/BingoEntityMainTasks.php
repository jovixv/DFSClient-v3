<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingoEntityMainTasksParams;
use DFSClientV3\Entity\Custom\BingoEntityMainTasksResult;
use DFSClientV3\Entity\Custom\BingoEntityMainTasksData_in;

class BingoEntityMainTasks 
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
    * @var null|BingoEntityMainTasksParams params;
    */
    public $params = null;        
    
    /**
    * @var null|BingoEntityMainTasksResult[] result;
    */
    public $result = null;        
    
    /**
    * @var null|BingoEntityMainTasksData_in data_in;
    */
    public $data_in = null;        
     
}