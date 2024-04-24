<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\QuestionsAndAnswers;


use DFSClientV3\Models\AbstractModel;

class QuestionsAndAnswersGetResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'business_data/google/questions_and_answers/task_get/{$taskUUID}';
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
	 * @return \DFSClientV3\Entity\Custom\QuestionsAndAnswersGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\QuestionsAndAnswersGetResultsByIdEntityMain
	{
		return parent::get();
	}
}
