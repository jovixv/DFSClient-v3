<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppList;

use DFSClientV3\Entity\Custom\GoogleAppListSetTaskEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppListSetTask extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'app_data/google/app_list/task_post';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return GoogleAppListSetTaskEntityMain
     */
    #[\Override]
    public function get(): GoogleAppListSetTaskEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $app_collection
     *
     * @return $this
     */
    public function setAppCollection(string $app_collection)
    {
        $this->payload['app_collection'] = $app_collection;

        return $this;
    }

    /**
     * @param string $app_category
     *
     * @return $this
     */
    public function setAppCategory(string $app_category)
    {
        $this->payload['app_category'] = $app_category;

        return $this;
    }

    /**
     * @param string $age_rating
     *
     * @return $this
     */
    public function setAgeRating(string $age_rating)
    {
        $this->payload['age_rating'] = $age_rating;

        return $this;
    }

    /**
     * @param int $depth
     *
     * @return $this
     */
    public function setDepth(int $depth)
    {
        $this->payload['depth'] = $depth;

        return $this;
    }

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->payload['offset'] = $offset;

        return $this;
    }

    /**
     * @param int $priority
     *
     * @return $this
     */
    public function setPriority(int $priority)
    {
        $this->payload['priority'] = $priority;

        return $this;
    }

    /**
     * @param string $locationName
     *
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     *
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;

        return $this;
    }

    /**
     * @param string $locationCoordinate
     *
     * @return $this
     */
    public function setLocationCoordinate(string $locationCoordinate)
    {
        $this->payload['location_coordinate'] = $locationCoordinate;

        return $this;
    }

    /**
     * @param string $languageName
     *
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;

        return $this;
    }

    /**
     * @param string $langCode
     *
     * @return $this
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

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
