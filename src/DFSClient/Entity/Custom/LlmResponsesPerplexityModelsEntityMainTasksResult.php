<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class LlmResponsesPerplexityModelsEntityMainTasksResult 
{    
    /**
    * @var null|string $model_name;
    */
    public $model_name = null;

    /**
    * @var null|boolean $web_search_supported;
    */
    public $web_search_supported = null;

	/**
	 * @var null|boolean $task_post_supported;
	 */
	public $task_post_supported = null;
 
}
