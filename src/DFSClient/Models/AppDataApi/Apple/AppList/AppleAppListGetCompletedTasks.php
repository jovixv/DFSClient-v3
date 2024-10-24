<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppList;

use DFSClientV3\Entity\Custom\AppleAppListGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppListGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/apple/app_list/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return AppleAppListGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): AppleAppListGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
