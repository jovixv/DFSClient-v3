<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Similarweb;

use DFSClientV3\Entity\Custom\SimilarwebGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class SimilarwebGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'domain_analytics/similarweb/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return SimilarwebGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): SimilarwebGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
