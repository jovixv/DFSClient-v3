<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleSellersGetHtmlResultsByIdEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class GoogleSellersGetHtmlResultsByIdEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20200421';

    /**
     * @var null|integer;
     */
    public $status_code = null;

    /**
     * @var null|string;
     */
    public $status_message = null;

    /**
     * @var null|string;
     */
    public $time = null;

    /**
     * @var null|integer;
     */
    public $cost = null;

    /**
     * @var null|integer;
     */
    public $tasks_count = null;

    /**
     * @var null|integer;
     */
    public $tasks_error = null;

    /**
     * array|GoogleSellersGetHtmlResultsByIdEntityMainTasks[] $tasks;.
     */
    public $tasks = [];

    /**
     * @return GoogleSellersGetHtmlResultsByIdEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
