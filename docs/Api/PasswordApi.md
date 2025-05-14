# COMPITAUT\DirectAdminAPI\PasswordApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiChangePasswordPost()**](PasswordApi.md#apiChangePasswordPost) | **POST** /api/change-password | Change password |


## `apiChangePasswordPost()`

```php
apiChangePasswordPost($data)
```

Change password

Change system user's unix, mail and FTP password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\PasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebChpasswdRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebChpasswdRequest | Request Data

try {
    $apiInstance->apiChangePasswordPost($data);
} catch (Exception $e) {
    echo 'Exception when calling PasswordApi->apiChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebChpasswdRequest**](../Model/WebChpasswdRequest.md)| Request Data | |

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
