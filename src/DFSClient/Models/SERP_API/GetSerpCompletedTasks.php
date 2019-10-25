<?php

namespace DFSClientV3\Models\SERP_API;

use DFSClientV3\Models\AbstractModel;
use function GuzzleHttp\Psr7\str;

class GetSerpCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'serp/{$se}/{$seType}/tasks_ready';
    protected $resultShouldBeTransformedToArray = false;

    /**
     * @var null
     */
    private  $se = null;

    /**
     * @var null
     */
    private  $seType = null;

//    public function setTaskId(string $taskUID)
//    {
//        $this->requestToFunction = str_replace('{$taskUID}', $taskUID, $this->requestToFunction);
//        return $this;
//    }
    /**
     * @param string $seType
     * @return $this
     * @throws \Exception
     */
    public function setSeType(string $seType)
    {
        if (!in_array($seType,$this->seTypes))
            throw new \Exception('Provided se type not allowed');

        $this->seType = $seType;

        $this->requestToFunction = str_replace('{$seType}', $seType, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->se = $seName;
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\GetSerpCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GetSerpCompletedTasksEntityMain
    {
        return parent::get();
    }

    /**
     * @return \DFSClientV3\Services\HttpClient\Handlers\Responses
     */
    public function process()
    {

        if ($this->seType === null or $this->se === null)
            $this->requestToFunction = str_replace('/{$se}/{$seType}','', $this->requestToFunction);

        return parent::process(); // TODO: Change the autogenerated stub
    }
}
