<?php

namespace DFSClientV3\Models\TrafficAnalyticsApi\Similarweb;

use DFSClientV3\Entity\Custom\TrafficAnalyticsSetTaskEntityMain;
use DFSClientV3\Models\AbstractModel;

class TrafficAnalyticsSetTask extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'traffic_analytics/similarweb/task_post';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return TrafficAnalyticsSetTaskEntityMain
     */
    #[\Override]
    public function get(): TrafficAnalyticsSetTaskEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function setTarget(string $target)
    {
        $this->payload['target'] = $target;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;

        return $this;
    }

    /**
     * @param string $postbackUrl
     *
     * @return $this
     */
    public function setPostbackUrl(string $postbackUrl)
    {
        $this->payload['postback_url'] = $postbackUrl;

        return $this;
    }

    /**
     * @param string $pingbackUrl
     *
     * @return $this
     */
    public function setPingbackUrl(string $pingbackUrl)
    {
        $this->payload['pingback_url'] = $pingbackUrl;

        return $this;
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     *
     * @return array
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
