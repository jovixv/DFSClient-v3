<?php

namespace DFSClientV3\Models\OnPageApi\Lighthouse;

use DFSClientV3\Entity\Custom\OnPageLighthouseVersionsEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageLighthouseVersions extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'on_page/lighthouse/versions';

    /**
     * @return OnPageLighthouseVersionsEntityMain
     */
    #[\Override]
    public function get(): OnPageLighthouseVersionsEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
