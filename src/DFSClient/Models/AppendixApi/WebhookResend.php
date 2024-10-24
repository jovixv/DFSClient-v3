<?php

namespace DFSClientV3\Models\AppendixApi;

use DFSClientV3\Entity\Custom\WebhookResendEntityMain;
use DFSClientV3\Models\AbstractModel;

class WebhookResend extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0';

    protected $requestToFunction = 'appendix/webhook_resend';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return WebhookResendEntityMain
     */
    #[\Override]
    public function get(): WebhookResendEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setId(string $taskUUID)
    {
        $this->payload['id'] = $taskUUID;

        return $this;
    }
}
