<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppSearches;

use DFSClientV3\Entity\Custom\GoogleAppSearchesGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppSearchesGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/google/app_searches/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return GoogleAppSearchesGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GoogleAppSearchesGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
