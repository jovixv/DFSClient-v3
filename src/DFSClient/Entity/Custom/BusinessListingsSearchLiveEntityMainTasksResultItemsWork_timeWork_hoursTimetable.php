<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableFriday;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableMonday;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableSaturday;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableSunday;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableThursday;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableTuesday;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableWednesday;

class BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetable
{
    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableSunday[];
     */
    public $sunday = [];

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableMonday[];
     */
    public $monday = [];

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableTuesday[];
     */
    public $tuesday = [];

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableWednesday[];
     */
    public $wednesday = [];

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableThursday[];
     */
    public $thursday = [];

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableFriday[];
     */
    public $friday = [];

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_timeWork_hoursTimetableSaturday[];
     */
    public $saturday = [];
}
