<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\OnPageForceStopEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageForceStop extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'on_page/force_stop';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->payload['id'] = $taskUUID;

        return $this;
    }

    /**
     * @return OnPageForceStopEntityMain
     */
    #[\Override]
    public function get(): OnPageForceStopEntityMain
    {
        return parent::get();
    }
}
