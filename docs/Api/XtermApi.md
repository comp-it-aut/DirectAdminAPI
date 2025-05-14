# COMPITAUT\DirectAdminAPI\XtermApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTerminalGet()**](XtermApi.md#apiTerminalGet) | **GET** /api/terminal | WebSocket endpoint to start new web terminal session |


## `apiTerminalGet()`

```php
apiTerminalGet($cols, $rows)
```

WebSocket endpoint to start new web terminal session

Once connected it starts a new shell in a virtual terminal and emulates terminal communications over the WebSocket messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\XtermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cols = 'cols_example'; // string | Number of columns for the initial terminal size, 80 by default
$rows = 'rows_example'; // string | Number of rows for the initial terminal size, 24 by default

try {
    $apiInstance->apiTerminalGet($cols, $rows);
} catch (Exception $e) {
    echo 'Exception when calling XtermApi->apiTerminalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cols** | **string**| Number of columns for the initial terminal size, 80 by default | [optional] |
| **rows** | **string**| Number of rows for the initial terminal size, 24 by default | [optional] |

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
