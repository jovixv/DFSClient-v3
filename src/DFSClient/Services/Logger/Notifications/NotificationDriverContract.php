<?php


namespace DFSClientV3\Services\Logger\Notifications;


use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Services\Logger\Message\MessageInterface;

interface NotificationDriverContract
{
    public function __construct(MessageInterface $message, Application $application);

    public function run():bool;
}
