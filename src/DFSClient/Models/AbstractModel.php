<?php

namespace DFSClientV3\Models;

use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Models\DataMapper;
use DFSClientV3\Services\HttpClient\Handlers\Responses;
use DFSClientV3\Services\HttpClient\HttpClient;

abstract class AbstractModel
{

    /**
     * @var null|int $timeOut timeout for http request
     */
    protected $timeOut = null;

    /**
     * @var null
     */
    protected $apiVersion = null;

    /**
     * @var string | null $url url to DataForSeo API
     */
    protected $url = null;

    /**
     * @var int|null PostId is needed for a request, for more information check an example or DFSApi
     */
    protected $postId = null;

    /**
     * @var null This field is not working at the moment
     */
    public $statusCode;

    /**
     * @var null This field is not working at the moment
     */
    public $statusMessage;

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var null This field is not working at the moment
     */
    protected $requiredField;

    /**
     * @var null This field is not working at the moment
     */
    protected $mainData;

    /**
     * @var static RequestType, this param will be sent to DFS API, .xml, .gzip etc...
     */
    protected $requestType;

    /**
     * @var string Method for http request. POST, GET , PUT, DELETE
     */
    protected $method = 'POST';

    /**
     * This variable is required for all extended Classes from AbstractModel.
     *
     * @var null|string It is a name, when you want to send a request to api, use this param as an api endpoint, example: cmn_user
     */
    protected $requestToFunction;

    /**
     * This variable is required for all extended Classes from AbstractModel
     * example for path: results->0->related.
     *
     * results - is object link from DFSResponse
     * 0       - is Index of array or postID
     * related - is object link containing main data
     *
     * @var null|string It is a system variable, it contains a path to main data from response and creates iterable(IteratorAggregator) response.
     */
    protected $pathToMainData = null;

    /**
     * @var bool If payload contains postId
     */
    protected $isSupportedMerge = false;

    /**
     * @var null|string
     */
    private $DFSLogin = null;
    /**
     * @var null|string
     */
    private $DFSPassword = null;

    public $response;

    protected $application;

    protected $config;

    /**
     * @var array
     */
    protected $payload;

    protected $isProcessed;

    protected $mappedMainModel;

    protected $seTypes = ['organic', 'maps', 'local_pack', 'news', 'images', 'search_by_image'];

    /**
     * @var bool
     */
    protected $jsonContainVariadicType = false;

    /**
     * @var array
     */
    protected $pathsToVariadicTypesAndValue = [];

    /**
     * @var array
     */
    protected $customFunctionForPaths = [];

    /**
     * @var array
     */
    protected $pathsToDictionary = [];

    /**
     * @var bool $useNewMapper Temp variable, for detect when use new mapper
     */
    protected $useNewMapper = false;


    /**
     * new version of DataForSeo has two variations of result
     * 1. Object contains other objects for response.
     * 2. Object contains other objects, but they is iterable.
     *
     * if model has property $resultShouldBeTransformedToArray as true, result index will be transformed to array
     *
     * @var bool
     */
    protected $resultShouldBeTransformedToArray = false;

    public function __construct()
    {
        $this->application = Application::getInstance();
        $this->config = $this->application->getConfig();
        $this->initDefaultMethods();

    }


    /**
     * @param $postID mixed
     */
    public function setPostID($postID)
    {
        $this->postId = $postID;
        return $this;
    }

	/**
	 * @param $headers array
	 */
	public function setHeaders($headers)
	{
		if (count($headers) > 0) {
			foreach ($headers as $key => $value) {
				$this->config['headers'][$key] = $value;
			}
		}

		return $this;
	}

    /**
     * This method will run request to api.
     *
     * @return
     */
    protected function get()
    {
        $response = $this->process();
        // check if response contain valid json

            $validResponse = json_decode($response->getResponse());

            if (json_last_error() !== JSON_ERROR_NONE ) {
                $validResponse = ['status_code' => 50000, 'status_message' => 'error.'];
            }

        return $this->mapData(json_encode($validResponse), $response->getStatus());
    }


    /**
     * @param array $modelPool
     * @return mixed
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        if (empty($modelPool))
            throw new \Exception('Model pool can not be empty');

        $payload = [];
        $url = null;
        $apiVersion = null;
        $timeOut = null;
        $login = null;
        $password = null;
        $method = null;
        $requestToFunction = null;
        $config = Application::getInstance()->getConfig();
        $pathToMainData = null;
        $resultShouldTransformedToArray = false;
        $useNewMapper = false;
        $isJsonContainVariadicType = false;
        $pathsToVariadicTypesAndValue  = [];
        $customFunctionForPaths = [];

        foreach ($modelPool as $key => $model){


            // kostyl, all variable will be rewrite every iteration
            $url = $model->url;
            $apiVersion = $model->apiVersion;
            $timeOut = $model->timeOut;
            $login = $model->DFSLogin;
            $password = $model->DFSPassword;
            $method = $model->method;
            $requestToFunction = $model->requestToFunction;
            $pathToMainData = $model->pathToMainData;
            $resultShouldTransformedToArray = $model->resultShouldBeTransformedToArray;
            $useNewMapper = $model->isUseNewMapper();
            $isJsonContainVariadicType = $model->isJsonContainVariadicType();
            $pathsToVariadicTypesAndValue  = $model->getPathsToVariadicTypesAndValue();
            $customFunctionForPaths = $model->getCustomFunctionForPaths();

            if ($model->isSupportedMerge){
                if ($model->postId === null)
                    $payload['json'][] = $model->payload;

                if ($model->postId !== null)
                    $payload['json'][$model->postId] = $model->payload;
            }else {
                throw new \Exception('Provided model '.get_class($model). ' is not supported merge');
            }
        }

        $payload['headers'] = $config['headers'];

        $http = new HttpClient($url, $apiVersion, $timeOut, $login, $password);

        $res = $http->sendSingleRequest($method, $requestToFunction, $payload);
        // check if response contain valid json

        $validResponse = json_decode($res->getResponse());

        if (json_last_error() !== JSON_ERROR_NONE ) {
            $validResponse = ['status_code' => 50000, 'status_message' => 'error.'];
        }

        //get called class.
        $calledClassNameWithNapeSpace = get_called_class();
        $classNameArray = explode('\\', $calledClassNameWithNapeSpace);
        //for php 7.3 can be use array_last_key
         $classNameArray[count($classNameArray ) -1];

        $mapper = new DataMapper($classNameArray[count($classNameArray ) -1], $res->getStatus(), $pathToMainData);

        if ($useNewMapper){
            $paveDataOptions = new PaveDataOptions();
            $paveDataOptions->setJson(json_encode($validResponse));
            $paveDataOptions->setJsonContainVariadicType($isJsonContainVariadicType);
            $paveDataOptions->setPathsToVariadicTypesAndValue($pathsToVariadicTypesAndValue);
            $paveDataOptions->setCustomFunctionForPaths($customFunctionForPaths);

            $mappedModel = $mapper->paveDataNew($paveDataOptions);

            return $mappedModel;
        }

        $mappedModel = $mapper->paveData(json_encode($validResponse), null, $resultShouldTransformedToArray);

        return $mappedModel;

    }

    /**
     * @param array|AbstractModel[] $modelPool
     * @param int $timeout
     * @return array|null
     */
    public static function getAsync(array $modelPool, int $timeout = 100)
    {

        if (count($modelPool) > 100)
            return null;

        $requestsPool = [];
        $results      = [];

        $payload = [];
        $url = null;
        $apiVersion = null;
        $timeOut = null;
        $login = null;
        $password = null;

        $config = Application::getInstance()->getConfig();
        $pathToMainData = null;
        $resultShouldTransformedToArray = false;
        $useNewMapper = false;
        $isJsonContainVariadicType = false;
        $pathsToVariadicTypesAndValue  = [];
        $customFunctionForPaths = [];
        $pathsToDictionary = [];

        foreach ($modelPool as $key => $model){

            // kostyl, all variable will be rewrite every iteration
            $url = $model->url;
            $apiVersion = $model->apiVersion;
            $login = $model->DFSLogin;
            $password = $model->DFSPassword;

            $pathToMainData = $model->pathToMainData;
            $resultShouldTransformedToArray = $model->resultShouldBeTransformedToArray;
            $useNewMapper = $model->isUseNewMapper();
            $isJsonContainVariadicType = $model->isJsonContainVariadicType();
            $pathsToVariadicTypesAndValue  = $model->getPathsToVariadicTypesAndValue();
            $customFunctionForPaths = $model->getCustomFunctionForPaths();
            $pathsToDictionary = $model->getPathsToDictionary();

            $payload['json'][] = $model->getPayload();
            $payload['headers'] = $config['headers'];

            $requestsPool[$key]['method'] = $model->getHttpMethod();
            $requestsPool[$key]['url'] = $model->getRequestToFunction();
            $requestsPool[$key]['params'] = $payload;
            $requestsPool[$key]['pathToMainData'] = $model->getPathToMainData();
        }


        $http = new HttpClient($url, $apiVersion, $timeout, $login, $password);
        $responses = $http->sendAsyncRequests($requestsPool, null);

        foreach ($responses as $response){

            /**
             * @var Responses $response
             */

            //get called class.
            $calledClassNameWithNapeSpace = get_called_class();
            $classNameArray = explode('\\', $calledClassNameWithNapeSpace);
            //for php 7.3 can be use array_last_key
            $classNameArray[count($classNameArray ) -1];

            $mapper = new DataMapper($classNameArray[count($classNameArray ) -1], $response->getStatus(), $pathToMainData);

            if ($useNewMapper){
                $paveDataOptions = new PaveDataOptions();
                $paveDataOptions->setJson($response->getResponse());
                $paveDataOptions->setJsonContainVariadicType($isJsonContainVariadicType);
                $paveDataOptions->setPathsToDictionary($pathsToDictionary);
                $paveDataOptions->setPathsToVariadicTypesAndValue($pathsToVariadicTypesAndValue);
                $paveDataOptions->setCustomFunctionForPaths($customFunctionForPaths);

                $mappedModel = $mapper->paveDataNew($paveDataOptions);

                $results[] = $mappedModel;
            }

            if (!$useNewMapper)
                $results[] = $mapper->paveData($response->getResponse(), null, $resultShouldTransformedToArray);
        }

        return $results;
    }

    /**
     * @return \DFSClientV3\Services\HttpClient\Handlers\Responses
     */
    public function process()
    {
        $http = new HttpClient($this->url, $this->apiVersion, $this->timeOut, $this->DFSLogin, $this->DFSPassword);
        $payload = [];

        if (!$this->application) {
            dd('DFSClient was not init, add to your code: $DFSClient = new DFSClient() ');
        }

        if (!$this->requestToFunction) {
            dd('requestFunction can not be null, set this field in your model: ' . get_called_class());
        }

        if ($this->postId === null)
            $payload['json'][0] = $this->payload;

        if ($this->postId != null)
            $payload['json'][$this->postId] = $this->payload;

        $payload['headers'] = $this->config['headers'];

        $res = $http->sendSingleRequest($this->method, $this->requestToFunction, $payload);
        return $res;
    }

    /**
     * @return null
     */
    public function getAsJson()
    {
        $result = $this->process()->getResponse();

        return $result;
    }

    /**
     * @return string|null
     */
    public function getPathToMainData()
    {
        return $this->pathToMainData;
    }

    /**
     * @return mixed
     */
    public function getCalledClass()
    {
        $calledClassNameWithNapeSpace = get_called_class();
        $classNameArray = explode('\\', $calledClassNameWithNapeSpace);

        //for php 7.3 can be use array_last_key
        return $classNameArray[count($classNameArray ) -1];
    }


    /**
     *
     */
    public function setOpt()
    {

    }
    /**
     * @param string $newLogin
     */
    public function setLogin(string $newLogin)
    {
        $this->DFSLogin = $newLogin;
        return $this;
    }


    public function setPassword(string $newPassword)
    {
        $this->DFSPassword = $newPassword;
        return $this;
    }


    /**
     * @param string $json
     * @param bool $isSuccesful
     *
     * return mixed;
     */
    protected function mapData(string $json, bool $isSuccesful = false)
    {

        $mapper = new DataMapper($this->getCalledClass(), $isSuccesful, $this->pathToMainData);

        if ($this->useNewMapper){
            $paveDataOptions = new PaveDataOptions();
            $paveDataOptions->setJson($json);
            $paveDataOptions->setJsonContainVariadicType($this->isJsonContainVariadicType());
            $paveDataOptions->setPathsToVariadicTypesAndValue($this->getPathsToVariadicTypesAndValue());
            $paveDataOptions->setPathsToDictionary($this->getPathsToDictionary());
            $paveDataOptions->setCustomFunctionForPaths($this->getCustomFunctionForPaths());

            $mappedModel = $mapper->paveDataNew($paveDataOptions);
            return $mappedModel;
        }

        $mappedModel = $mapper->paveData($json, null, $this->resultShouldBeTransformedToArray);

        return $mappedModel;
    }


    /**
     * @return bool
     */
    public function resultShouldBeTransformedToArray()
    {
        return $this->resultShouldBeTransformedToArray;
    }

    public function useSandbox(string $url = null)
    {
    	$this->url = $this->config['sandboxUrl'];
    }

	/**
	 * @param $timeOut int
	 */
	public function setTimeOut(int $timeOut)
	{
		$this->timeOut = $timeOut;
		return $this;
	}


    /**
     * @return bool
     */
    public function isJsonContainVariadicType(): bool
    {
        return $this->jsonContainVariadicType;
    }

    /**
     * @return array
     */
    public function getPathsToVariadicTypesAndValue(): array
    {
        return $this->pathsToVariadicTypesAndValue;
    }

    /**
     * @return array
     */
    public function getPathsToDictionary(): array
    {
        return $this->pathsToDictionary;
    }
    /**
     * @param array $customFunction
     */
    public function addCustomFunctionForPath(array $customFunction)
    {
        $this->customFunctionForPaths = array_merge($this->customFunctionForPaths, $customFunction);
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomFunctionForPaths(): array
    {
        return $this->customFunctionForPaths;
    }

    /**
     *
     */
    private function initDefaultMethods()
    {
        $this->addCustomFunctionForPath($this->initCustomFunctionForPaths());

    }

    /**
     * @return array
     */
    protected function initCustomFunctionForPaths(): array
    {
        return [];
    }

    /**
     * @return bool
     */
    public function isUseNewMapper(): bool
    {
        return $this->useNewMapper;
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->method;
    }


    /**
     * @return string|null
     */
    public function getRequestToFunction()
    {
        return $this->requestToFunction;
    }

    /**
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload ?? [];
    }
}
