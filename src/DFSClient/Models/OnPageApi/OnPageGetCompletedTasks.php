<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\OnPageGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $requestToFunction = 'on_page/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return OnPageGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): OnPageGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
