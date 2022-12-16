<?php

namespace DFSClientV3\Entity\Custom;


class ContentGenerationCheckGrammarLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $input_tokens;
    */
    public $input_tokens = null;

    /**
    * @var null|integer $output_tokens;
    */
    public $output_tokens = null;

    /**
    * @var null|integer $new_tokens;
    */
    public $new_tokens = null;

    /**
    * @var null|string $initial_text;
    */
    public $initial_text = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|ContentGenerationCheckGrammarLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}