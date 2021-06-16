<?php


namespace DFSClientV3\Models\BusinessDataApi\Google\Reviews;


use DFSClientV3\Models\AbstractModel;

class ReviewsLanguages extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'reviews/{$se}/languages';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\ReviewsLanguagesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleReviewsLanguagesEntityMain
    {
        return parent::get();
    }

}
