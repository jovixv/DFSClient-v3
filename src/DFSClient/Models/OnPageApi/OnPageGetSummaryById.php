<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\OnPageGetSummaryByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageGetSummaryById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'on_page/summary/{$taskUUID}';

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
     * @return OnPageGetSummaryByIdEntityMain
     */
    #[\Override]
    public function get(): OnPageGetSummaryByIdEntityMain
    {
        return parent::get();
    }
}
