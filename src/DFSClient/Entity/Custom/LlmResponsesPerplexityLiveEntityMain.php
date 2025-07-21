<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmResponsesPerplexityLiveEntityMainTasks;

#[\AllowDynamicProperties]
class LlmResponsesPerplexityLiveEntityMain extends \DFSClientV3\Models\ResponseModel 
{    
    /**
    * @var null|string $version;
    */
    public $version = '0.1.20250526';

    /**
    * @var null|integer $status_code;
    */
    public $status_code = null;

    /**
    * @var null|string $status_message;
    */
    public $status_message = null;

    /**
    * @var null|string $time;
    */
    public $time = null;

    /**
    * @var null|integer $cost;
    */
    public $cost = null;

    /**
    * @var null|integer $tasks_count;
    */
    public $tasks_count = null;

    /**
    * @var null|integer $tasks_error;
    */
    public $tasks_error = null;

    /**
    * @var array|LlmResponsesPerplexityLiveEntityMainTasks[] $tasks;
    */
    public $tasks = [];
 

	/**
	* @return \DFSClientV3\Entity\Custom\LlmResponsesPerplexityLiveEntityMainTasksResult[]|null
	*/
	public function getResultsByPostID($postID): ?array {
		return parent::getResultsByPostID($postID);
	}
}