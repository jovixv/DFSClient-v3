<?php

namespace DFSClientV3\Services\HttpClient\Handlers;

class Responses
{
    /**
     * @param bool        $status
     * @param null|string $response
     */
    public function __construct(private $status, private $errorMessage = null, private $response = null, private $headers = null)
    {
    }

    /*
     * getters for response
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /*
     * getters for message
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /*
     * getters for headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}
