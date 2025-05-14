# COMPITAUT\DirectAdminAPI\LicensingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLicenseGet()**](LicensingApi.md#apiLicenseGet) | **GET** /api/license | Get license info |
| [**apiLicenseProofGet()**](LicensingApi.md#apiLicenseProofGet) | **GET** /api/license/proof | Get license session proof |
| [**apiLicenseUpdateKeyPost()**](LicensingApi.md#apiLicenseUpdateKeyPost) | **POST** /api/license/update-key | Change license key |


## `apiLicenseGet()`

```php
apiLicenseGet(): \COMPITAUT\DirectAdminAPI\Model\WebLicenseResponse
```

Get license info

Get license info (admins only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LicensingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiLicenseGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensingApi->apiLicenseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLicenseResponse**](../Model/WebLicenseResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLicenseProofGet()`

```php
apiLicenseProofGet(): \COMPITAUT\DirectAdminAPI\Model\WebLicenseProofResponse
```

Get license session proof

Generate license session proof for independent verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LicensingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiLicenseProofGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensingApi->apiLicenseProofGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLicenseProofResponse**](../Model/WebLicenseProofResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLicenseUpdateKeyPost()`

```php
apiLicenseUpdateKeyPost($data)
```

Change license key

Verify new license key is valid, switch to it and restart DirectAdmin. Verification is skipped if `force` is set to `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LicensingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebLicenseUpdateRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebLicenseUpdateRequest | Request Data

try {
    $apiInstance->apiLicenseUpdateKeyPost($data);
} catch (Exception $e) {
    echo 'Exception when calling LicensingApi->apiLicenseUpdateKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebLicenseUpdateRequest**](../Model/WebLicenseUpdateRequest.md)| Request Data | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
