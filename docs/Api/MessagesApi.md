# COMPITAUT\DirectAdminAPI\MessagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiMessagesGet()**](MessagesApi.md#apiMessagesGet) | **GET** /api/messages | Get messages list |


## `apiMessagesGet()`

```php
apiMessagesGet($limit, $offset): \COMPITAUT\DirectAdminAPI\Model\WebMessage[]
```

Get messages list

Fetch messages list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 500; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->apiMessagesGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->apiMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit | [optional] [default to 500] |
| **offset** | **int**| Offset | [optional] [default to 0] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebMessage[]**](../Model/WebMessage.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
