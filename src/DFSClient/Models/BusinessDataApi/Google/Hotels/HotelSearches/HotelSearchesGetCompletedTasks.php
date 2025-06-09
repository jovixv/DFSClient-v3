<?php


namespace DFSClientV3\Models\BusinessDataApi\Google\Hotels\HotelSearches;


use DFSClientV3\Models\AbstractModel;

class HotelSearchesGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/google/hotel_searches/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\HotelSearchesGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\HotelSearchesGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
