# COMPITAUT\DirectAdminAPI\CpanelApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCpanelImportCheckRemotePost()**](CpanelApi.md#apiCpanelImportCheckRemotePost) | **POST** /api/cpanel-import/check-remote | Checks SSH connection to remote cPanel server and returns list of remote users |
| [**apiCpanelImportTasksGet()**](CpanelApi.md#apiCpanelImportTasksGet) | **GET** /api/cpanel-import/tasks | List all cPanel import tasks |
| [**apiCpanelImportTasksIdDelete()**](CpanelApi.md#apiCpanelImportTasksIdDelete) | **DELETE** /api/cpanel-import/tasks/{id} | Delete single pending cPanel import task |
| [**apiCpanelImportTasksIdGet()**](CpanelApi.md#apiCpanelImportTasksIdGet) | **GET** /api/cpanel-import/tasks/{id} | Get single cPanel import task |
| [**apiCpanelImportTasksIdLogGet()**](CpanelApi.md#apiCpanelImportTasksIdLogGet) | **GET** /api/cpanel-import/tasks/{id}/log | Retrieve single import task log |
| [**apiCpanelImportTasksIdLogSseGet()**](CpanelApi.md#apiCpanelImportTasksIdLogSseGet) | **GET** /api/cpanel-import/tasks/{id}/log-sse | Stream import task log |
| [**apiCpanelImportTasksStartPost()**](CpanelApi.md#apiCpanelImportTasksStartPost) | **POST** /api/cpanel-import/tasks/start | Starts remote cPanel account import to local DirectAdmin server |


## `apiCpanelImportCheckRemotePost()`

```php
apiCpanelImportCheckRemotePost($params): \COMPITAUT\DirectAdminAPI\Model\WebCpanelCheckResponse
```

Checks SSH connection to remote cPanel server and returns list of remote users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = new \COMPITAUT\DirectAdminAPI\Model\WebCpanelCheckRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebCpanelCheckRequest | Remote cPanel server credentials

try {
    $result = $apiInstance->apiCpanelImportCheckRemotePost($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpanelApi->apiCpanelImportCheckRemotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | [**\COMPITAUT\DirectAdminAPI\Model\WebCpanelCheckRequest**](../Model/WebCpanelCheckRequest.md)| Remote cPanel server credentials | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCpanelCheckResponse**](../Model/WebCpanelCheckResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCpanelImportTasksGet()`

```php
apiCpanelImportTasksGet(): \COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTask[]
```

List all cPanel import tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCpanelImportTasksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpanelApi->apiCpanelImportTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTask[]**](../Model/WebCpanelImportTask.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCpanelImportTasksIdDelete()`

```php
apiCpanelImportTasksIdDelete($id)
```

Delete single pending cPanel import task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Task ID

try {
    $apiInstance->apiCpanelImportTasksIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CpanelApi->apiCpanelImportTasksIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Task ID | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCpanelImportTasksIdGet()`

```php
apiCpanelImportTasksIdGet($id): \COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTask
```

Get single cPanel import task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Task ID

try {
    $result = $apiInstance->apiCpanelImportTasksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpanelApi->apiCpanelImportTasksIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Task ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTask**](../Model/WebCpanelImportTask.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCpanelImportTasksIdLogGet()`

```php
apiCpanelImportTasksIdLogGet($id): \COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTaskLog[]
```

Retrieve single import task log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Task ID

try {
    $result = $apiInstance->apiCpanelImportTasksIdLogGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpanelApi->apiCpanelImportTasksIdLogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Task ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTaskLog[]**](../Model/WebCpanelImportTaskLog.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCpanelImportTasksIdLogSseGet()`

```php
apiCpanelImportTasksIdLogSseGet($id, $lastSeen): \COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTaskLog
```

Stream import task log

Connection is closed when import task ends.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Task ID
$lastSeen = 'lastSeen_example'; // string | Last-Event-Id

try {
    $result = $apiInstance->apiCpanelImportTasksIdLogSseGet($id, $lastSeen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpanelApi->apiCpanelImportTasksIdLogSseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Task ID | |
| **lastSeen** | **string**| Last-Event-Id | [optional] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTaskLog**](../Model/WebCpanelImportTaskLog.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCpanelImportTasksStartPost()`

```php
apiCpanelImportTasksStartPost($params): \COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTask[]
```

Starts remote cPanel account import to local DirectAdmin server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = new \COMPITAUT\DirectAdminAPI\Model\WebCpanelImportStart(); // \COMPITAUT\DirectAdminAPI\Model\WebCpanelImportStart | Remote cPanel server credentials and list of accounts to import

try {
    $result = $apiInstance->apiCpanelImportTasksStartPost($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpanelApi->apiCpanelImportTasksStartPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | [**\COMPITAUT\DirectAdminAPI\Model\WebCpanelImportStart**](../Model/WebCpanelImportStart.md)| Remote cPanel server credentials and list of accounts to import | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCpanelImportTask[]**](../Model/WebCpanelImportTask.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
