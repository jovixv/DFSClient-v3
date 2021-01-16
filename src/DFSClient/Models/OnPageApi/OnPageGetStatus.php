<?php


namespace DFSClientV3\Models\OnPageApi;


use DFSClientV3\Entity\Custom\OnPageGetStatusEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageGetStatus extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'on_page/status/{uuid}';
    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @param string UUID $taskID
     */
    public function setTaskId(string $taskID)
    {
        $this->requestToFunction = str_replace('{uuid}', $taskID, $this->requestToFunction);
        return $this;
    }

    /**
     * @return OnPageGetStatusEntityMain
     */
    public function get(): OnPageGetStatusEntityMain
    {
       return parent::get();
    }
}
