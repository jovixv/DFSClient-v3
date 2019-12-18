<?php


namespace DFSClientV3\Services\Logger\Drivers;


use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Services\Logger\Message\MessageInterface;


interface LoggerDriverContract
{
    public function pushMessage(MessageInterface $message, Application $application);

    public function isDuplicatedMessage(MessageInterface $message, Application $application): bool;
}
