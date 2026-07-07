<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class LlmMentionsTimeseriesNewLostLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $date;
    */
    public $date = null;

    /**
    * @var null|integer $new_mentions;
    */
    public $new_mentions = null;

    /**
    * @var null|integer $lost_mentions;
    */
    public $lost_mentions = null;

    /**
    * @var null|integer $new_ai_search_volume;
    */
    public $new_ai_search_volume = null;

    /**
    * @var null|integer $lost_ai_search_volume;
    */
    public $lost_ai_search_volume = null;
 
}