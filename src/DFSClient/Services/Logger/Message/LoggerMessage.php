<?php


namespace DFSClientV3\Services\Logger\Message;


class LoggerMessage implements MessageInterface
{

    /**
     * @var string $messageBody
     */
    protected $messageBody;

    /**
     * @var string $messageTitle ;
     */
    protected $messageTitle;

    /**
     * @var string $level ;
     */
    protected $level;

    /**
     * @var string $file ;
     */
    protected $file;

    /**
     * @var
     */
    protected $dfsVersion;

    /**
     * @var
     */
    protected $localVersion;

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
                                string $localVersion = '')
    {
        $this->messageBody = $messageBody;
        $this->messageTitle = $messageTitle;
        $this->level = $level;
        $this->file = $file;
        $this->dfsVersion = $dfsVersion;
        $this->localVersion = $localVersion;
    }

    public function getMessageTitle(): string
    {
        return $this->messageTitle;
    }

    public function getMessageBody()
    {
        return $this->messageBody;
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getDFSVersion()
    {
        return $this->dfsVersion;
    }

    public function getLocalVersion()
    {
        return $this->localVersion;
    }

    public function getStructuredMessageAsString()
    {
        $currentDateTime = date('Y-d-m h:i:s');
        $string = <<<MESSAGE
========[$this->level][$currentDateTime] $this->messageTitle ==========
FILE: $this->file
EntityVersion: $this->localVersion
DFSVersion: $this->dfsVersion
$this->messageBody


MESSAGE;

        return $string;
    }

}
