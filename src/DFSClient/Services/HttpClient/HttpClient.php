<?php

namespace DFSClientV3\Services\HttpClient;

use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Services\HttpClient\Contracts\HttpContract;
use DFSClientV3\Services\HttpClient\Handlers\Responses;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Promise;

class HttpClient implements HttpContract
{
    /*
     * init new variable impemented Guzzle/
     */
    private $client;

    public $typeResponse = '.gzip';

    /**
     * Create a new HttpClient instance
     * This Class is using Guzzle/Http.
     *
     * HttpClient constructor.
     *
     * @param $base_url
     * @param $timeout
     * @param $login
     * @param $password
     *
     * @return void
     */
    public function __construct($base_url, $apiVersion, $timeout, $login, $password, $typeResponse = null)
    {
        $config = Application::getInstance()->getConfig();

        $this->typeResponse = $typeResponse;
        $this->client = new GuzzleClient([
            // if env is exist use env variable,else ''
            'base_uri'  => (($base_url) ? $base_url : $config['url'])
                         .(($apiVersion) ? $apiVersion : $config['apiVersion']),

            'timeout'   => ($timeout) ? $timeout : $config['timeoutForEachRequests'],
            'auth'      => [
                ($login) ? $login : $config['DATAFORSEO_LOGIN'],
                ($login) ? $password : $config['DATAFORSEO_PASSWORD'],
            ],
        ]);
    }

    /*
     * @param string $method
     * @param string $url
     * @param array  $params
     *
     * @return \Handlers\Responses
     */
    public function sendSingleRequest($method, $url, $params): Responses
    {
        $result = null;
        $content = null;

        try {
            $send = $this->client->request($method, $url.$this->typeResponse, $params);
            $content = $send->getBody()->getContents();

            $checkError = json_decode($content, false, 512, JSON_BIGINT_AS_STRING);

            // check for existing errors in response. Some APIs return 200 ok, but an error may exist in the response's body
            if (isset($checkError->error)) {
                $result = new Responses(false, 'DFS api returned an error, for more information check $completed->errorResponse ', $checkError, null);
            } else {
                $result = new Responses(true, null, $content,
                    $send->getHeaders()
                );
            }
        } catch (BadResponseException $e) {
            $result = new Responses(false, $e->getMessage(), $e->getResponse()->getBody()->getContents(), null);
        } catch (GuzzleException $er) {
            $result = new Responses(false, $er->getMessage(), json_encode(['status_message'=>$er->getMessage(), 'status_code' => 50000]), null);
        }

        unset($content);

        return $result;
    }

    /*
     * Send Async requests
     * ********************************************************************************
     * example params for {@args} [
     *                            'nameForRequest'=>[
     *                                  'method'=>'GET',
     *                                  'url'=>'/someurl',
     *                                  'params'=> http://docs.guzzlephp.org/en/stable/request-options.html
     *                             ],
     *
     *                              'nameForRequest2'=>['method'=>'GET','url'=>'/someurl']
     *                            ]
     **********************************************************************************
     * @param array @args
     * @param $someData array
     *
     * @return array
     */
    public function sendAsyncRequests(array $args, $someData):array
    {

        // array with requests
        $promises = [];

        $results = [];

        // creating task for Promise
        foreach ($args as $key=>$arg) {
            // checking variable from args array
            if (isset($arg['method']) and isset($arg['url'])) {
                $promises[$key] = $this->client->requestAsync($arg['method'], $arg['url'].$this->typeResponse, (isset($arg['params'])) ? $arg['params'] : []);
            }
        }

        // waiting and processing requests
        $waitingFinish = Promise\settle($promises)->wait();

        //creating results array
        foreach ($waitingFinish as $key=>$finished) {
            // if request is ok
            if ($finished['state'] == 'fulfilled' and isset($finished['value'])) {
                // init and add new object to results
                $results[$key] = new Responses(true, null, $finished['value']->getBody()->getContents(),
                   $finished['value']->getHeaders()
               );
            } else {
                // init and add new object to results
                $results[$key] = new Responses(false, $finished['reason']->getMessage(), null, null);
            }
        }

        return $results;
    }
}
