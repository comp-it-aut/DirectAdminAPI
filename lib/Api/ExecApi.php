<?php
/**
 * ExecApi
 * PHP version 8.1
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Swagger DirectAdmin API
 *
 * Swagger API for DirectAdmin server
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@directadmin.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace COMPITAUT\DirectAdminAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use COMPITAUT\DirectAdminAPI\ApiException;
use COMPITAUT\DirectAdminAPI\Configuration;
use COMPITAUT\DirectAdminAPI\FormDataProcessor;
use COMPITAUT\DirectAdminAPI\HeaderSelector;
use COMPITAUT\DirectAdminAPI\ObjectSerializer;

/**
 * ExecApi Class Doc Comment
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExecApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'apiExecutePost' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiExecutePost
     *
     * Executes command with options under user privileges
     *
     * @param  \COMPITAUT\DirectAdminAPI\Model\WebExecPayload $payload command to execute (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiExecutePost'] to see the possible values for this operation
     *
     * @throws \COMPITAUT\DirectAdminAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \COMPITAUT\DirectAdminAPI\Model\WebExecResult|\COMPITAUT\DirectAdminAPI\Model\ApierrorBadRequest|\COMPITAUT\DirectAdminAPI\Model\ApierrorUnauthorized|\COMPITAUT\DirectAdminAPI\Model\ApierrorLicenseOverused|\COMPITAUT\DirectAdminAPI\Model\ApierrorAccessDenied|\COMPITAUT\DirectAdminAPI\Model\ApierrorPreHookError|\COMPITAUT\DirectAdminAPI\Model\ApierrorInternalError
     */
    public function apiExecutePost($payload, string $contentType = self::contentTypes['apiExecutePost'][0])
    {
        list($response) = $this->apiExecutePostWithHttpInfo($payload, $contentType);
        return $response;
    }

    /**
     * Operation apiExecutePostWithHttpInfo
     *
     * Executes command with options under user privileges
     *
     * @param  \COMPITAUT\DirectAdminAPI\Model\WebExecPayload $payload command to execute (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiExecutePost'] to see the possible values for this operation
     *
     * @throws \COMPITAUT\DirectAdminAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \COMPITAUT\DirectAdminAPI\Model\WebExecResult|\COMPITAUT\DirectAdminAPI\Model\ApierrorBadRequest|\COMPITAUT\DirectAdminAPI\Model\ApierrorUnauthorized|\COMPITAUT\DirectAdminAPI\Model\ApierrorLicenseOverused|\COMPITAUT\DirectAdminAPI\Model\ApierrorAccessDenied|\COMPITAUT\DirectAdminAPI\Model\ApierrorPreHookError|\COMPITAUT\DirectAdminAPI\Model\ApierrorInternalError, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiExecutePostWithHttpInfo($payload, string $contentType = self::contentTypes['apiExecutePost'][0])
    {
        $request = $this->apiExecutePostRequest($payload, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\COMPITAUT\DirectAdminAPI\Model\WebExecResult',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorBadRequest',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorUnauthorized',
                        $request,
                        $response,
                    );
                case 402:
                    return $this->handleResponseWithDataType(
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorLicenseOverused',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorAccessDenied',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorPreHookError',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorInternalError',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\COMPITAUT\DirectAdminAPI\Model\WebExecResult',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\COMPITAUT\DirectAdminAPI\Model\WebExecResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorBadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorUnauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 402:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorLicenseOverused',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorAccessDenied',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorPreHookError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\COMPITAUT\DirectAdminAPI\Model\ApierrorInternalError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation apiExecutePostAsync
     *
     * Executes command with options under user privileges
     *
     * @param  \COMPITAUT\DirectAdminAPI\Model\WebExecPayload $payload command to execute (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiExecutePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiExecutePostAsync($payload, string $contentType = self::contentTypes['apiExecutePost'][0])
    {
        return $this->apiExecutePostAsyncWithHttpInfo($payload, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiExecutePostAsyncWithHttpInfo
     *
     * Executes command with options under user privileges
     *
     * @param  \COMPITAUT\DirectAdminAPI\Model\WebExecPayload $payload command to execute (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiExecutePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiExecutePostAsyncWithHttpInfo($payload, string $contentType = self::contentTypes['apiExecutePost'][0])
    {
        $returnType = '\COMPITAUT\DirectAdminAPI\Model\WebExecResult';
        $request = $this->apiExecutePostRequest($payload, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiExecutePost'
     *
     * @param  \COMPITAUT\DirectAdminAPI\Model\WebExecPayload $payload command to execute (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiExecutePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiExecutePostRequest($payload, string $contentType = self::contentTypes['apiExecutePost'][0])
    {

        // verify the required parameter 'payload' is set
        if ($payload === null || (is_array($payload) && count($payload) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload when calling apiExecutePost'
            );
        }


        $resourcePath = '/api/execute';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['*/*', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payload)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payload));
            } else {
                $httpBody = $payload;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
