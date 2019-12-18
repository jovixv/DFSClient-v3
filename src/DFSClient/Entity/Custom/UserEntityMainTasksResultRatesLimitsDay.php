<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDaySerp;

class UserEntityMainTasksResultRatesLimitsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayAppendix $appendix;
    */
    public $appendix = null;

    /**
    * @var null|integer $total;
    */
    public $total = null;

    /**
    * @var null|integer $total_appendix;
    */
    public $total_appendix = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|integer $total_keywords_data;
    */
    public $total_keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDaySerp $serp;
    */
    public $serp = null;

    /**
    * @var null|integer $total_serp;
    */
    public $total_serp = null;
 
}