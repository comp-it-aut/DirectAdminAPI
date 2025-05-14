# COMPITAUT\DirectAdminAPI\ExecApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiExecutePost()**](ExecApi.md#apiExecutePost) | **POST** /api/execute | Executes command with options under user privileges |


## `apiExecutePost()`

```php
apiExecutePost($payload): \COMPITAUT\DirectAdminAPI\Model\WebExecResult
```

Executes command with options under user privileges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebExecPayload(); // \COMPITAUT\DirectAdminAPI\Model\WebExecPayload | command to execute

try {
    $result = $apiInstance->apiExecutePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->apiExecutePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebExecPayload**](../Model/WebExecPayload.md)| command to execute | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebExecResult**](../Model/WebExecResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
