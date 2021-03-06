<?php
/**
 * LeadApi
 * PHP version 5
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * INTROVERT API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Introvert\Api;

use \Introvert\ApiClient;
use \Introvert\ApiException;
use \Introvert\Configuration;
use \Introvert\ObjectSerializer;

/**
 * LeadApi Class Doc Comment
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadApi
{
    /**
     * API Client
     *
     * @var \Introvert\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Introvert\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Introvert\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://test.api.yadrocrm.ru/tmp');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Introvert\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Introvert\ApiClient $apiClient set the API client
     *
     * @return LeadApi
     */
    public function setApiClient(\Introvert\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation allLinks
     *
     * Возвращает связанные контакты по id
     *
     * @param int[] $id id сделки (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function allLinks($id)
    {
        list($response) = $this->allLinksWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation allLinksWithHttpInfo
     *
     * Возвращает связанные контакты по id
     *
     * @param int[] $id id сделки (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function allLinksWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling allLinks');
        }
        // parse inputs
        $resourcePath = "/crm/lead/links";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($id !== null) {
            $queryParams['id'] = $id; //$this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/lead/links'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation create
     *
     * Создает сделки
     *
     * @param \Introvert\Model\Lead[] | array $body Массив объектов создаваемых сделок (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function create($body)
    {
        list($response) = $this->createWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * Создает сделки
     *
     * @param \Introvert\Model\Lead[] | array $body Массив объектов создаваемых сделок (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling create');
        }
        // parse inputs
        $resourcePath = "/crm/lead/create";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/lead/create'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAll
     *
     * Возвращает список сделок
     *
     * @param int[] $crm_user_id фильтр по id ответственного (optional)
     * @param int[] $status фильтр по id статуса (optional)
     * @param int[] $id фильтр по id (optional)
     * @param string $ifmodif фильтр по дате изменения. timestamp или строка в формате &#39;D, j M Y H:i:s&#39; (optional)
     * @param int $count Количество запрашиваемых элементов (optional)
     * @param int $offset смещение, относительно которого нужно вернуть элементы (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getAll($crm_user_id = null, $status = null, $id = null, $ifmodif = null, $count = null, $offset = null)
    {
        list($response) = $this->getAllWithHttpInfo($crm_user_id, $status, $id, $ifmodif, $count, $offset);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * Возвращает список сделок
     *
     * @param int[] $crm_user_id фильтр по id ответственного (optional)
     * @param int[] $status фильтр по id статуса (optional)
     * @param int[] $id фильтр по id (optional)
     * @param string $ifmodif фильтр по дате изменения. timestamp или строка в формате &#39;D, j M Y H:i:s&#39; (optional)
     * @param int $count Количество запрашиваемых элементов (optional)
     * @param int $offset смещение, относительно которого нужно вернуть элементы (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($crm_user_id = null, $status = null, $id = null, $ifmodif = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/crm/lead/list";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($crm_user_id !== null) {
            $queryParams['crm_user_id'] = $crm_user_id; //$this->apiClient->getSerializer()->serializeCollection($crm_user_id, 'multi', true);
        }

        // query params
        if ($status !== null) {
            $queryParams['status'] = $status; //$this->apiClient->getSerializer()->serializeCollection($status, 'multi', true);
        }

        // query params
        if ($id !== null) {
            $queryParams['id'] = $id; //$this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }

        // query params
        if ($ifmodif !== null) {
            $queryParams['ifmodif'] = $this->apiClient->getSerializer()->toQueryValue($ifmodif);
        }

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/lead/list'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getById
     *
     * Возвращает сделку по id
     *
     * @param int $id id сделки (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getById($id)
    {
        list($response) = $this->getByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getByIdWithHttpInfo
     *
     * Возвращает сделку по id
     *
     * @param int $id id сделки (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getByIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getById');
        }
        // parse inputs
        $resourcePath = "/crm/lead/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/lead/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation links
     *
     * Возвращает связанные контакты по id
     *
     * @param int $id id сделки (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function links($id)
    {
        list($response) = $this->linksWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation linksWithHttpInfo
     *
     * Возвращает связанные контакты по id
     *
     * @param int $id id сделки (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function linksWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling links');
        }
        // parse inputs
        $resourcePath = "/crm/lead/{id}/links";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/lead/{id}/links'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation search
     *
     * Поиск сделок
     *
     * @param string $query строка поиска (required)
     * @param int $count Количество запрашиваемых элементов (optional)
     * @param int $offset смещение, относительно которого нужно вернуть элементы (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function search($query, $count = null, $offset = null)
    {
        list($response) = $this->searchWithHttpInfo($query, $count, $offset);
        return $response;
    }

    /**
     * Operation searchWithHttpInfo
     *
     * Поиск сделок
     *
     * @param string $query строка поиска (required)
     * @param int $count Количество запрашиваемых элементов (optional)
     * @param int $offset смещение, относительно которого нужно вернуть элементы (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWithHttpInfo($query, $count = null, $offset = null)
    {
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling search');
        }
        // parse inputs
        $resourcePath = "/crm/lead/search";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($query !== null) {
            $queryParams['query'] = $this->apiClient->getSerializer()->toQueryValue($query);
        }

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/lead/search'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation update
     *
     * Обновляет сделки
     *
     * @param \Introvert\Model\Lead[] | array $body  (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function update($body = null)
    {
        list($response) = $this->updateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * Обновляет сделки
     *
     * @param \Introvert\Model\Lead[] | array $body  (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/crm/lead/update";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/lead/update'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
