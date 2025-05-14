# COMPITAUT\DirectAdminAPI\SecurityTxtApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiSecurityTxtStatusGet()**](SecurityTxtApi.md#apiSecurityTxtStatusGet) | **GET** /api/security-txt/status | Check security.txt |


## `apiSecurityTxtStatusGet()`

```php
apiSecurityTxtStatusGet(): \COMPITAUT\DirectAdminAPI\Model\WebSecurityTxtStatus[]
```

Check security.txt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SecurityTxtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSecurityTxtStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityTxtApi->apiSecurityTxtStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSecurityTxtStatus[]**](../Model/WebSecurityTxtStatus.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
