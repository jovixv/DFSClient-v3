<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppInfo;

use DFSClientV3\Entity\Custom\GoogleAppInfoGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppInfoGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/google/app_info/task_get/advanced/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);

        return $this;
    }

    /**
     * @return GoogleAppInfoGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): GoogleAppInfoGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
