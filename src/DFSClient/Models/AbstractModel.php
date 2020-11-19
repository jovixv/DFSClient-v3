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

    protected $payload;

    protected $isProcessed;

    protected $mappedMainModel;

    protected $seTypes = ['organic', 'maps', 'local_pack', 'news', 'images'];

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
     * @return array
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
        $mappedModel = $mapper->paveData(json_encode($validResponse), null, $resultShouldTransformedToArray);

        return $mappedModel;

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




}
