<?php

namespace DFSClientV3\Models;

class ResponseModel implements \IteratorAggregate
{
    public $status_code;

    public $tasks_error = -1;

    /**
     * ResponseModel constructor.
     *
     * @param bool $requestStatus
     */
    public function __construct(
        private readonly bool $requestStatus,
        /**
         * @var string $pathToMainData path for Iterator
         */
        private readonly string $pathToMainData
    ) {
    }

    #[\Override]
    public function getIterator(): \Traversable
    {
        // TODO: Implement getIterator() method.
    }

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return $this->requestStatus;
    }

    /**
     * @param $postID
     *
     * @return mixed|null
     */
    public function getResultsByPostID($postID)
    {
        $pathToData       = str_replace('{$postID}', $postID, $this->pathToMainData);
        $pathDataSegments = explode('->', $pathToData);

        $tempData = null;

        foreach ($pathDataSegments as $segment) {
            $segment = trim($segment);

            if ($tempData !== null) {
                if (is_array($tempData)) {
                    $tempData = $tempData[$segment];
                } else {
                    $tempData = $tempData->{$segment};
                }
            }

            if ($tempData === null) {
                $tempData = $this->{$segment};
            }
        }

        return $tempData;
    }

    /**
     * @return bool
     */
    public function isSuccessfully(): bool
    {
        if (!$this->requestStatus) {
            return false;
        }

        if ($this->status_code === null or $this->status_code > 30000) {
            return false;
        }

        return true;
    }

    /**
     * @return bool
     */
    public function resultsContainError(): bool
    {
        if ($this->tasks_error > 0) {
            return true;
        }

        return false;
    }
}
