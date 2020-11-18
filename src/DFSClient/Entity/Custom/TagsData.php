<?php


namespace DFSClientV3\Entity\Custom;


class TagsData
{
    /**
     * @var
     */
    protected $tagContent;

    /**
     * TagsData constructor.
     * @param $tagContent
     */
    public function __construct($tagContent)
    {
        $this->tagContent = $tagContent;
    }
    /**
     * @return mixed
     */
    public function getTagContent()
    {
        return $this->tagContent;
    }

}
