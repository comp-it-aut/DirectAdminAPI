# COMPITAUT\DirectAdminAPI\UserSearchApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiSessionLoginAsUserListGet()**](UserSearchApi.md#apiSessionLoginAsUserListGet) | **GET** /api/session/login-as/user-list | Search for users when in login-as session |


## `apiSessionLoginAsUserListGet()`

```php
apiSessionLoginAsUserListGet($q, $limit): \COMPITAUT\DirectAdminAPI\Model\WebSearchResult[]
```

Search for users when in login-as session

query searches for user or domain that contains query `q`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\UserSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | query
$limit = 50.0; // float | Query limit

try {
    $result = $apiInstance->apiSessionLoginAsUserListGet($q, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSearchApi->apiSessionLoginAsUserListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| query | [optional] |
| **limit** | **float**| Query limit | [optional] [default to 50.0] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSearchResult[]**](../Model/WebSearchResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
