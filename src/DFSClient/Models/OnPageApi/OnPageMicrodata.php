<?php


namespace DFSClientV3\Models\OnPageApi;


use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageMicrodata extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'on_page/microdata';
    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @param string $taskUUID
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->payload['id'] = $taskUUID;
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->payload['url'] = $url;
        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;
        return $this;
    }

    /**
     * @return
     * OnPageContentParsingEntityMain
     */
    public function get()
    //: OnPageContentParsingEntityMain
    {
        return parent::get();
    }

}
