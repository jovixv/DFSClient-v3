<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Entity\Custom\GetSerpCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

use function GuzzleHttp\Psr7\str;

class GetSerpCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'serp/{$se}/{$seType}/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seType
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setSeType(string $seType)
    {
        if (!in_array($seType, $this->seTypes)) {
            throw new \Exception('Provided se type not allowed');
        }

        $this->seType = $seType;

        $this->requestToFunction = str_replace('{$seType}', $seType, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->se                = $seName;
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @return GetSerpCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GetSerpCompletedTasksEntityMain
    {
        return parent::get();
    }
}
