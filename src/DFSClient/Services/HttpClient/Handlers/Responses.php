<?php

namespace DFSClientV3\Services\HttpClient\Handlers;

class Responses
{
    /**
     * @var bool $status
     */
    private $status;

    /**
     * @var null|string $response
     */
    private $response;

    private $errorMessage;

    private $headers;

    public function __construct($status, $errorMessage = null, $response = null, $headers = null)
    {
        $this->status = $status;
        $this->errorMessage = $errorMessage;
        $this->response = $response;
        $this->headers = $headers;
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
