<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableFriday;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableMonday;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableSaturday;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableSunday;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableThursday;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableTuesday;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableWednesday;

class BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetable
{
    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableSunday[];
     */
    public $sunday = [];

    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableMonday[];
     */
    public $monday = [];

    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableTuesday[];
     */
    public $tuesday = [];

    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableWednesday[];
     */
    public $wednesday = [];

    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableThursday[];
     */
    public $thursday = [];

    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableFriday[];
     */
    public $friday = [];

    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hoursWork_hoursTimetableSaturday[];
     */
    public $saturday = [];
}
