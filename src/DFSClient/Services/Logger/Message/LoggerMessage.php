<?php

namespace DFSClientV3\Services\Logger\Message;

use DFSClientV3\Services\Logger\LoggerMessageEntity;

class LoggerMessage implements MessageInterface
{
    /**
     * @var string ;
     */
    protected $messageTitle;

    /**
     * @var string ;
     */
    protected $level;

    /**
     * @var string ;
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
     *
     * @param        $messageBody
     * @param string $messageTitle
     * @param string $file
     * @param string $level
     * @param string $dfsVersion
     * @param string $localVersion
     * @param string $messageBody
     */
    public function __construct(
        protected $messageBody,
        string $messageTitle = '',
        string $file = '',
        string $level = 'INFO',
        string $dfsVersion = '',
        string $localVersion = ''
    ) {
        $this->messageTitle = $messageTitle;
        $this->level        = $level;
        $this->file         = $file;
        $this->dfsVersion   = $dfsVersion;
        $this->localVersion = $localVersion;
    }

    #[\Override]
    public function getMessageTitle(): string
    {
        return $this->messageTitle;
    }

    #[\Override]
    public function getMessageBody()
    {
        return $this->messageBody;
    }

    #[\Override]
    public function getLevel(): string
    {
        return $this->level;
    }

    #[\Override]
    public function getFile(): string
    {
        return $this->file;
    }

    #[\Override]
    public function getDFSVersion()
    {
        return $this->dfsVersion;
    }

    #[\Override]
    public function getLocalVersion()
    {
        return $this->localVersion;
    }

    #[\Override]
    public function getStructuredMessageAsString()
    {
        if ($this->messageBody instanceof LoggerMessageEntity) {
            $messageContent = '';

            // Message list
            foreach ($this->messageBody->messagesWithNewLine as $message) {
                $messageContent .= $message;
            }

            // Message with new fields list
            if (!empty($this->messageBody->realizedNewFields)) {
                $messageContent .= PHP_EOL . '[ENTITY]: DFS API realized new field for your entity' . PHP_EOL . '==================== File ==============================|     New Field     |=======|' . PHP_EOL;
                foreach ($this->messageBody->realizedNewFields as $fileName => $value) {
                    foreach ($value as $fielName => $fieldArr) {
                        $messageContent .= $fieldArr['file'] . '  ->->-> NEW FIELD: ' . $fieldArr['field'] . ' FIELD TYPE: ' . $fieldArr['type'] . PHP_EOL .
                            '------------------------------------------------------------------------------------|' . PHP_EOL;
                    }
                }
            }

            // Message with list of not existed fields
            if (!empty($this->messageBody->notExistedFieldsInDFS)) {
                $messageContent = PHP_EOL . '[DFSClient]: List of fields not received from DFS API' . PHP_EOL . '==================== File ==============================|     New Field     |=======|' . PHP_EOL;
                foreach ($this->messageBody->notExistedFieldsInDFS as $className => $fields) {
                    foreach ($fields as $fieldName) {
                        $messageContent .= $className . '  ->->-> NOT RECEIVED: ' . $fieldName . PHP_EOL .
                            '------------------------------------------------------------------------------------|' . PHP_EOL;
                    }
                }
            }
        } else {
            $messageContent = $this->messageBody;
        }

        $currentDateTime = date('Y-d-m h:i:s');
        $string          = <<<MESSAGE
========[$this->level][$currentDateTime] $this->messageTitle ==========
FILE: $this->file
EntityVersion: $this->localVersion
DFSVersion: $this->dfsVersion
$messageContent


MESSAGE;

        return $string;
    }
}
