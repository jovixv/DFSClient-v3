<?php

namespace DFSClientV3\Models\BusinessDataApi;

use DFSClientV3\Entity\Custom\BusinessUpdatesGetResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class BusinessUpdatesGetResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'business_data/{$se}/my_business_updates/task_get/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

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
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @return BusinessUpdatesGetResultsByIdEntityMain
     */
    #[\Override]
    public function get(): BusinessUpdatesGetResultsByIdEntityMain
    {
        return parent::get();
    }
}
