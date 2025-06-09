<?php


namespace DFSClientV3\Models\BusinessDataApi\Google\Hotels\HotelInfo;


use DFSClientV3\Models\AbstractModel;

class HotelInfoGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/google/hotel_info/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\HotelInfoGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\HotelInfoGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
