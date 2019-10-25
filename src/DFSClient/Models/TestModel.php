<?php

namespace DFSClientV3\Models;

use DFSClientV3\Entity\Custom\TestModelEntityMain;

class TestModel extends AbstractModel
{

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/live/search_volume';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @Required
     *
     * @param string $langCode
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

        return $this;
    }

    /**
     * @param array $keys
     */
    public function setKeys(array $keys)
    {
        $this->payload['keys'] = $keys;

        return $this;
    }

    /**
     * @param string $locationName
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return TestModelEntityMain
     */
    public function get(): TestModelEntityMain
    {
        return parent::get();
    }
}
