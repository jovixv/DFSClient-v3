<?php


namespace DFSClientV3\Services\Logger\Message;


interface MessageInterface
{
    /**
     * LoggerMessage constructor.
     * @param $messageBody
     * @param string $messageTitle
     * @param string $file
     * @param string $level
     * @param string $dfsVersion
     * @param string $localVersion
     */
    public function __construct($messageBody,
                                string $messageTitle = '',
                                string $file = '',
                                string $level = 'INFO',
                                string $dfsVersion = '',
                                string $localVersion = '');

    /**
     * @return mixed
     */
    public function getMessageBody();

    public function getMessageTitle(): string;

    public function getLevel(): string;

    public function getFile(): string;

    public function getDFSVersion();

    public function getLocalVersion();

    public function getStructuredMessageAsString();
}
