<?php

namespace DFSClientV3\Models\BacklinksApi;

use DFSClientV3\Entity\Custom\BackLinksSummaryEntityMain;
use DFSClientV3\Models\AbstractModel;

class BackLinksSummary extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'backlinks/summary/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = false;

    protected $useNewMapper = true;

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
     * @param bool $isIncludeSubdomains
     *
     * @return $this
     */
    public function setIncludeSubdomains(bool $isIncludeSubdomains)
    {
        $this->payload['include_subdomains'] = $isIncludeSubdomains;

        return $this;
    }

    /**
     * @param int $internalListLimit
     *
     * @return $this
     */
    public function setInternalListLimit(int $internalListLimit)
    {
        $this->payload['internal_list_limit'] = $internalListLimit;

        return $this;
    }

    /**
     * @param string $backLinksStatusType
     *
     * @return $this
     */
    public function setBackLinksStatusType(string $backLinksStatusType)
    {
        $this->payload['backlinks_status_type'] = $backLinksStatusType;

        return $this;
    }

    /**
     * @param array $backLinksFilters
     *
     * @return $this
     */
    public function setBackLinksFilters(array $backLinksFilters)
    {
        $this->payload['backlinks_filters'] = $backLinksFilters;

        return $this;
    }

    /**
     * @param bool $includeIndirectLinks
     *
     * @return $this
     */
    public function setIncludeIndirectLinks(bool $includeIndirectLinks)
    {
        $this->payload['include_indirect_links'] = $includeIndirectLinks;

        return $this;
    }

    /**
     * @param bool $excludeInternalBackLinks
     *
     * @return $this
     */
    public function setExcludeInternalBackLinks(bool $excludeInternalBackLinks)
    {
        $this->payload['exclude_internal_backlinks'] = $excludeInternalBackLinks;

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
     * @return BackLinksSummaryEntityMain
     */
    #[\Override]
    public function get(): BackLinksSummaryEntityMain
    {
        return parent::get();
    }

    #[\Override]
    protected function initCustomFunctionForPaths(): array
    {
        return [
            'tasks->(:number)->result->(:number)->referring_links_tld'                => fn ($key, $value) => (array) $value,
            'tasks->(:number)->result->(:number)->referring_links_types'              => fn ($key, $value) => (array) $value,
            'tasks->(:number)->result->(:number)->referring_links_attributes'         => fn ($key, $value) => (array) $value,
            'tasks->(:number)->result->(:number)->referring_links_platform_types'     => fn ($key, $value) => (array) $value,
            'tasks->(:number)->result->(:number)->referring_links_semantic_locations' => fn ($key, $value) => (array) $value,
            'tasks->(:number)->result->(:number)->referring_links_countries'          => fn ($key, $value) => (array) $value,
        ];
    }
}
