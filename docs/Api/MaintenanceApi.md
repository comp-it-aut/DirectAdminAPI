# COMPITAUT\DirectAdminAPI\MaintenanceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiMaintenanceGet()**](MaintenanceApi.md#apiMaintenanceGet) | **GET** /api/maintenance | List maintenance tasks |
| [**apiMaintenanceTaskCheckPost()**](MaintenanceApi.md#apiMaintenanceTaskCheckPost) | **POST** /api/maintenance/{task}/check | run task checks |
| [**apiMaintenanceTaskFixPost()**](MaintenanceApi.md#apiMaintenanceTaskFixPost) | **POST** /api/maintenance/{task}/fix | run task automatic fix action |


## `apiMaintenanceGet()`

```php
apiMaintenanceGet(): \COMPITAUT\DirectAdminAPI\Model\WebMaintenanceTask[]
```

List maintenance tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiMaintenanceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->apiMaintenanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebMaintenanceTask[]**](../Model/WebMaintenanceTask.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiMaintenanceTaskCheckPost()`

```php
apiMaintenanceTaskCheckPost($task): \COMPITAUT\DirectAdminAPI\Model\WebCheckResult
```

run task checks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task = 'task_example'; // string | task to check

try {
    $result = $apiInstance->apiMaintenanceTaskCheckPost($task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->apiMaintenanceTaskCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task** | **string**| task to check | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCheckResult**](../Model/WebCheckResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiMaintenanceTaskFixPost()`

```php
apiMaintenanceTaskFixPost($task): \COMPITAUT\DirectAdminAPI\Model\WebFixResult
```

run task automatic fix action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task = 'task_example'; // string | task to fix

try {
    $result = $apiInstance->apiMaintenanceTaskFixPost($task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->apiMaintenanceTaskFixPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task** | **string**| task to fix | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebFixResult**](../Model/WebFixResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
