<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class LlmResponsesGeminiLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $model_name;
    */
    public $model_name = null;

    /**
    * @var null|integer $input_tokens;
    */
    public $input_tokens = null;

    /**
    * @var null|integer $output_tokens;
    */
    public $output_tokens = null;

    /**
    * @var null|boolean $web_search;
    */
    public $web_search = null;

    /**
    * @var null|double $money_spent;
    */
    public $money_spent = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var array|LlmResponsesGeminiLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}