<?php

namespace DFSClientV3\Entity\Custom;

class TagsData
{
    /**
     * TagsData constructor.
     *
     * @param $tagContent
     */
    public function __construct(
        /**
         * @var
         */
        protected $tagContent
    ) {
    }

    /**
     * @return mixed
     */
    public function getTagContent()
    {
        return $this->tagContent;
    }
}
