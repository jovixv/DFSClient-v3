<?php

namespace DFSClientV3\Models\AppDataApi;

use DFSClientV3\Entity\Custom\LanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class Languages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'app_data/{$se}/languages';

    protected $resultShouldBeTransformedToArray = true;

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
     * @return LanguagesEntityMain
     */
    #[\Override]
    public function get(): LanguagesEntityMain
    {
        return parent::get();
    }
}
