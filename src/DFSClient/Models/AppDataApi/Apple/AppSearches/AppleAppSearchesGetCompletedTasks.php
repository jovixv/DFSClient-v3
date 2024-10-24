<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppSearches;

use DFSClientV3\Entity\Custom\AppleAppSearchesGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppSearchesGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/apple/app_searches/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return AppleAppSearchesGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): AppleAppSearchesGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
