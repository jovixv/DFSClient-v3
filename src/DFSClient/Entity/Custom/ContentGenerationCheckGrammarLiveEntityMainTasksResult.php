<?php

namespace DFSClientV3\Entity\Custom;

class ContentGenerationCheckGrammarLiveEntityMainTasksResult
{
    /**
     * @var null|integer;
     */
    public $input_tokens = null;

    /**
     * @var null|integer;
     */
    public $output_tokens = null;

    /**
     * @var null|integer;
     */
    public $new_tokens = null;

    /**
     * @var null|string;
     */
    public $initial_text = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|ContentGenerationCheckGrammarLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
