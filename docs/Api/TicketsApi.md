# COMPITAUT\DirectAdminAPI\TicketsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTicketRequestsGet()**](TicketsApi.md#apiTicketRequestsGet) | **GET** /api/ticket-requests | Get ticket requests list |
| [**apiTicketsGet()**](TicketsApi.md#apiTicketsGet) | **GET** /api/tickets | Get received tickets list |


## `apiTicketRequestsGet()`

```php
apiTicketRequestsGet($limit, $offset): \COMPITAUT\DirectAdminAPI\Model\WebTicketResponse[]
```

Get ticket requests list

Fetch ticket requests list, i.e., tickets we created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 500; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->apiTicketRequestsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->apiTicketRequestsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit | [optional] [default to 500] |
| **offset** | **int**| Offset | [optional] [default to 0] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebTicketResponse[]**](../Model/WebTicketResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTicketsGet()`

```php
apiTicketsGet($limit, $offset): \COMPITAUT\DirectAdminAPI\Model\WebTicketResponse[]
```

Get received tickets list

Fetch received tickets list (admin & reseller only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 500; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->apiTicketsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->apiTicketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit | [optional] [default to 500] |
| **offset** | **int**| Offset | [optional] [default to 0] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebTicketResponse[]**](../Model/WebTicketResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
