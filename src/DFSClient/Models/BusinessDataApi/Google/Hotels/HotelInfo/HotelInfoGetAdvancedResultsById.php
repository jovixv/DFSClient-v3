<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\Hotels\HotelInfo;


use DFSClientV3\Models\AbstractModel;

class HotelInfoGetAdvancedResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'business_data/google/hotel_info/task_get/advanced/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;
    protected $useNewMapper = true;

	/**
	 * @param string $taskUUID
	 * @return $this
	 */
	public function setTaskId(string $taskUUID)
	{
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}

	/**
	 * @deprecated This method is not necessary, only 'google'.
	 * @param string $seName
	 * @return $this
	 */
	public function setSe(string $seName)
	{
		$this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
		return $this;
	}

    protected function initCustomFunctionForPaths(): array
    {
        return [
            'tasks->(:number)->result->(:number)->reviews->rating_distribution' => function($key, $value){
                return (array) $value;
            },
        ];
    }
	
	/**
	 * @return \DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMain
	{
		return parent::get();
	}

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
