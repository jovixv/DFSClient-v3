<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppList;


use DFSClientV3\Models\AbstractModel;

class GoogleAppListGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'app_data/google/app_list/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleAppListGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleAppListGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
