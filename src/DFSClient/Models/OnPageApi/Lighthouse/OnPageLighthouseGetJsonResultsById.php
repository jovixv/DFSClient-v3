<?php

namespace DFSClientV3\Models\OnPageApi\Lighthouse;

use DFSClientV3\Entity\Custom\OnPageLighthouseGetJsonResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageLighthouseGetJsonResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'on_page/lighthouse/task_get/json/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = false;

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
     * @return \DFSClientV3\Entity\Custom\OnPageLighthouseGetJsonResultsByIdEntityMain
     */
    #[\Override]
    public function get(): OnPageLighthouseGetJsonResultsByIdEntityMain
    {
        return parent::get();
    }
}
