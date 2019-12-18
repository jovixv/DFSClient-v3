<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataSearch_volumeLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataSearch_volumeTask_get;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataSearch_volumeTask_post;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataSearch_volumeTasks_ready;

class UserEntityMainTasksResultPriceKeywords_dataSearch_volume 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataSearch_volumeLive $live;
    */
    public $live = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataSearch_volumeTask_get $task_get;
    */
    public $task_get = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataSearch_volumeTask_post $task_post;
    */
    public $task_post = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataSearch_volumeTasks_ready $tasks_ready;
    */
    public $tasks_ready = null;
 
}