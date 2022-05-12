<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppInfo;


use DFSClientV3\Models\AbstractModel;

class AppleAppInfoGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'app_data/apple/app_info/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\AppleAppInfoGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AppleAppInfoGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
