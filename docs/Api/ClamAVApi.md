# COMPITAUT\DirectAdminAPI\ClamAVApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiClamavGet()**](ClamAVApi.md#apiClamavGet) | **GET** /api/clamav | Get clamAV processes |
| [**apiClamavPidDelete()**](ClamAVApi.md#apiClamavPidDelete) | **DELETE** /api/clamav/{pid} | Cancel the clamAV process by PID |
| [**apiClamavPost()**](ClamAVApi.md#apiClamavPost) | **POST** /api/clamav | Scan directories in the specified path |


## `apiClamavGet()`

```php
apiClamavGet(): \COMPITAUT\DirectAdminAPI\Model\WebClamAVProcsResponse
```

Get clamAV processes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ClamAVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiClamavGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClamAVApi->apiClamavGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebClamAVProcsResponse**](../Model/WebClamAVProcsResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiClamavPidDelete()`

```php
apiClamavPidDelete($pid)
```

Cancel the clamAV process by PID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ClamAVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pid = 'pid_example'; // string | PID

try {
    $apiInstance->apiClamavPidDelete($pid);
} catch (Exception $e) {
    echo 'Exception when calling ClamAVApi->apiClamavPidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pid** | **string**| PID | |

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

## `apiClamavPost()`

```php
apiClamavPost($params)
```

Scan directories in the specified path

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ClamAVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = new \COMPITAUT\DirectAdminAPI\Model\WebClamAVRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebClamAVRequest | ClamAV params

try {
    $apiInstance->apiClamavPost($params);
} catch (Exception $e) {
    echo 'Exception when calling ClamAVApi->apiClamavPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | [**\COMPITAUT\DirectAdminAPI\Model\WebClamAVRequest**](../Model/WebClamAVRequest.md)| ClamAV params | |

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
