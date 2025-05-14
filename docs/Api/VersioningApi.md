# COMPITAUT\DirectAdminAPI\VersioningApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiVersionGet()**](VersioningApi.md#apiVersionGet) | **GET** /api/version | Get versions info |
| [**apiVersionPatch()**](VersioningApi.md#apiVersionPatch) | **PATCH** /api/version | Change update channel |
| [**apiVersionUpdatePost()**](VersioningApi.md#apiVersionUpdatePost) | **POST** /api/version/update | Update Directadmin |


## `apiVersionGet()`

```php
apiVersionGet(): \COMPITAUT\DirectAdminAPI\Model\WebVersionResponse
```

Get versions info

Get Directadmin versions info (admins only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\VersioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVersionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->apiVersionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebVersionResponse**](../Model/WebVersionResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVersionPatch()`

```php
apiVersionPatch($body): \COMPITAUT\DirectAdminAPI\Model\WebVersionResponse
```

Change update channel

Change Directadmin update channel (admins only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\VersioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \COMPITAUT\DirectAdminAPI\Model\WebVersionRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebVersionRequest | Update data.

try {
    $result = $apiInstance->apiVersionPatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->apiVersionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\COMPITAUT\DirectAdminAPI\Model\WebVersionRequest**](../Model/WebVersionRequest.md)| Update data. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebVersionResponse**](../Model/WebVersionResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVersionUpdatePost()`

```php
apiVersionUpdatePost()
```

Update Directadmin

Start Directadmin update process (admins only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\VersioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiVersionUpdatePost();
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->apiVersionUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
