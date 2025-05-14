# COMPITAUT\DirectAdminAPI\DatabaseMonitorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDbMonitorProcessesGet()**](DatabaseMonitorApi.md#apiDbMonitorProcessesGet) | **GET** /api/db-monitor/processes | Get database processes list |
| [**apiDbMonitorProcessesIdKillPost()**](DatabaseMonitorApi.md#apiDbMonitorProcessesIdKillPost) | **POST** /api/db-monitor/processes/{id}/kill | Kill database thread |


## `apiDbMonitorProcessesGet()`

```php
apiDbMonitorProcessesGet(): \COMPITAUT\DirectAdminAPI\Model\WebDbMonitorProcess[]
```

Get database processes list

Exposes MySQL/MariaDB `information_schema.PROCESSLIST` contents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiDbMonitorProcessesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseMonitorApi->apiDbMonitorProcessesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbMonitorProcess[]**](../Model/WebDbMonitorProcess.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbMonitorProcessesIdKillPost()`

```php
apiDbMonitorProcessesIdKillPost($id)
```

Kill database thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Thread ID.

try {
    $apiInstance->apiDbMonitorProcessesIdKillPost($id);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseMonitorApi->apiDbMonitorProcessesIdKillPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Thread ID. | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
