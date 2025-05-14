# COMPITAUT\DirectAdminAPI\CustombuildApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCustombuildActionsGet()**](CustombuildApi.md#apiCustombuildActionsGet) | **GET** /api/custombuild/actions | Get available custombuild actions |
| [**apiCustombuildCompileScriptsAppGet()**](CustombuildApi.md#apiCustombuildCompileScriptsAppGet) | **GET** /api/custombuild/compile-scripts/{app} | Get custombuild&#39;s app&#39;s default compile script |
| [**apiCustombuildCompileScriptsCustomAppDelete()**](CustombuildApi.md#apiCustombuildCompileScriptsCustomAppDelete) | **DELETE** /api/custombuild/compile-scripts-custom/{app} | Delete custombuild&#39;s app&#39;s custom compile script (reset to default) |
| [**apiCustombuildCompileScriptsCustomAppGet()**](CustombuildApi.md#apiCustombuildCompileScriptsCustomAppGet) | **GET** /api/custombuild/compile-scripts-custom/{app} | Get custombuild&#39;s app&#39;s customized compile script |
| [**apiCustombuildCompileScriptsCustomAppPut()**](CustombuildApi.md#apiCustombuildCompileScriptsCustomAppPut) | **PUT** /api/custombuild/compile-scripts-custom/{app} | Set custombuild&#39;s app&#39;s custom compile script |
| [**apiCustombuildCompileScriptsGet()**](CustombuildApi.md#apiCustombuildCompileScriptsGet) | **GET** /api/custombuild/compile-scripts | Get all custombuild&#39;s apps&#39; compile scripts metadata |
| [**apiCustombuildKillPost()**](CustombuildApi.md#apiCustombuildKillPost) | **POST** /api/custombuild/kill | Kill custombuild |
| [**apiCustombuildLogsGet()**](CustombuildApi.md#apiCustombuildLogsGet) | **GET** /api/custombuild/logs | Get all custombuild log files metadata |
| [**apiCustombuildLogsLognameDelete()**](CustombuildApi.md#apiCustombuildLogsLognameDelete) | **DELETE** /api/custombuild/logs/{logname} | Delete custombuild log |
| [**apiCustombuildLogsLognameSseGet()**](CustombuildApi.md#apiCustombuildLogsLognameSseGet) | **GET** /api/custombuild/logs/{logname}/sse | Stream custombuild log file |
| [**apiCustombuildOptionsGet()**](CustombuildApi.md#apiCustombuildOptionsGet) | **GET** /api/custombuild/options | Get custombuild options |
| [**apiCustombuildOptionsPatch()**](CustombuildApi.md#apiCustombuildOptionsPatch) | **PATCH** /api/custombuild/options | Patch custombuild options |
| [**apiCustombuildOptionsV2Get()**](CustombuildApi.md#apiCustombuildOptionsV2Get) | **GET** /api/custombuild/options-v2 | Get custombuild options |
| [**apiCustombuildOptionsV2Patch()**](CustombuildApi.md#apiCustombuildOptionsV2Patch) | **PATCH** /api/custombuild/options-v2 | Patch custombuild options |
| [**apiCustombuildOptionsValidateGet()**](CustombuildApi.md#apiCustombuildOptionsValidateGet) | **GET** /api/custombuild/options/validate | Get custombuild options validation message |
| [**apiCustombuildRemovalsGet()**](CustombuildApi.md#apiCustombuildRemovalsGet) | **GET** /api/custombuild/removals | List of custombuild commands to remove no longer needed software |
| [**apiCustombuildRunPost()**](CustombuildApi.md#apiCustombuildRunPost) | **POST** /api/custombuild/run | Run Custombuild |
| [**apiCustombuildSoftwareGet()**](CustombuildApi.md#apiCustombuildSoftwareGet) | **GET** /api/custombuild/software | Get available custombuild software |
| [**apiCustombuildStateGet()**](CustombuildApi.md#apiCustombuildStateGet) | **GET** /api/custombuild/state | Get custombuild state |
| [**apiCustombuildStateSseGet()**](CustombuildApi.md#apiCustombuildStateSseGet) | **GET** /api/custombuild/state/sse | Get custombuild state stream |
| [**apiCustombuildUpdatesGet()**](CustombuildApi.md#apiCustombuildUpdatesGet) | **GET** /api/custombuild/updates | Get available custombuild updates |
| [**apiCustombuildVersionsCustomAppDelete()**](CustombuildApi.md#apiCustombuildVersionsCustomAppDelete) | **DELETE** /api/custombuild/versions-custom/{app} | Delete custombuild&#39;s app&#39;s custom version |
| [**apiCustombuildVersionsCustomAppPut()**](CustombuildApi.md#apiCustombuildVersionsCustomAppPut) | **PUT** /api/custombuild/versions-custom/{app} | Set custombuild&#39;s app&#39;s custom version |
| [**apiCustombuildVersionsCustomGet()**](CustombuildApi.md#apiCustombuildVersionsCustomGet) | **GET** /api/custombuild/versions-custom | Get all custombuild&#39;s apps custom versions |
| [**apiCustombuildVersionsGet()**](CustombuildApi.md#apiCustombuildVersionsGet) | **GET** /api/custombuild/versions | Get all custombuild&#39;s apps default versions |


## `apiCustombuildActionsGet()`

```php
apiCustombuildActionsGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbAction[]
```

Get available custombuild actions

Report available custombuild actions (cached until restart).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildActionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildActionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbAction[]**](../Model/WebCbAction.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildCompileScriptsAppGet()`

```php
apiCustombuildCompileScriptsAppGet($app): \COMPITAUT\DirectAdminAPI\Model\WebCbCompileScript
```

Get custombuild's app's default compile script

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | Application name

try {
    $result = $apiInstance->apiCustombuildCompileScriptsAppGet($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildCompileScriptsAppGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| Application name | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbCompileScript**](../Model/WebCbCompileScript.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildCompileScriptsCustomAppDelete()`

```php
apiCustombuildCompileScriptsCustomAppDelete($app)
```

Delete custombuild's app's custom compile script (reset to default)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | Application name

try {
    $apiInstance->apiCustombuildCompileScriptsCustomAppDelete($app);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildCompileScriptsCustomAppDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| Application name | |

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

## `apiCustombuildCompileScriptsCustomAppGet()`

```php
apiCustombuildCompileScriptsCustomAppGet($app): \COMPITAUT\DirectAdminAPI\Model\WebCbCompileScript
```

Get custombuild's app's customized compile script

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | Application name

try {
    $result = $apiInstance->apiCustombuildCompileScriptsCustomAppGet($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildCompileScriptsCustomAppGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| Application name | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbCompileScript**](../Model/WebCbCompileScript.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildCompileScriptsCustomAppPut()`

```php
apiCustombuildCompileScriptsCustomAppPut($app, $data): \COMPITAUT\DirectAdminAPI\Model\WebCbCompileScript
```

Set custombuild's app's custom compile script

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | Application name
$data = new \COMPITAUT\DirectAdminAPI\Model\WebCbCompileConfigRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebCbCompileConfigRequest | Request Data

try {
    $result = $apiInstance->apiCustombuildCompileScriptsCustomAppPut($app, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildCompileScriptsCustomAppPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| Application name | |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebCbCompileConfigRequest**](../Model/WebCbCompileConfigRequest.md)| Request Data | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbCompileScript**](../Model/WebCbCompileScript.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildCompileScriptsGet()`

```php
apiCustombuildCompileScriptsGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbCompileScriptMetadata[]
```

Get all custombuild's apps' compile scripts metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildCompileScriptsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildCompileScriptsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbCompileScriptMetadata[]**](../Model/WebCbCompileScriptMetadata.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildKillPost()`

```php
apiCustombuildKillPost()
```

Kill custombuild

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiCustombuildKillPost();
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildKillPost: ', $e->getMessage(), PHP_EOL;
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

## `apiCustombuildLogsGet()`

```php
apiCustombuildLogsGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbLogMetadata[]
```

Get all custombuild log files metadata

Get a list of custombuild log files with timestamps and sizes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildLogsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbLogMetadata[]**](../Model/WebCbLogMetadata.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildLogsLognameDelete()`

```php
apiCustombuildLogsLognameDelete($logname)
```

Delete custombuild log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logname = 'logname_example'; // string | Log file name.

try {
    $apiInstance->apiCustombuildLogsLognameDelete($logname);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildLogsLognameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **logname** | **string**| Log file name. | |

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

## `apiCustombuildLogsLognameSseGet()`

```php
apiCustombuildLogsLognameSseGet($logname, $lastEventId): string
```

Stream custombuild log file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logname = 'logname_example'; // string | Log file name
$lastEventId = 'lastEventId_example'; // string | Read from position.

try {
    $result = $apiInstance->apiCustombuildLogsLognameSseGet($logname, $lastEventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildLogsLognameSseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **logname** | **string**| Log file name | |
| **lastEventId** | **string**| Read from position. | [optional] |

### Return type

**string**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildOptionsGet()`

```php
apiCustombuildOptionsGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbOptions
```

Get custombuild options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildOptionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbOptions**](../Model/WebCbOptions.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildOptionsPatch()`

```php
apiCustombuildOptionsPatch($data): \COMPITAUT\DirectAdminAPI\Model\WebCbOptions
```

Patch custombuild options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebCbOptionsRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebCbOptionsRequest | Request Data

try {
    $result = $apiInstance->apiCustombuildOptionsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildOptionsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebCbOptionsRequest**](../Model/WebCbOptionsRequest.md)| Request Data | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbOptions**](../Model/WebCbOptions.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildOptionsV2Get()`

```php
apiCustombuildOptionsV2Get(): \COMPITAUT\DirectAdminAPI\Model\WebCbOptionFull[]
```

Get custombuild options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildOptionsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildOptionsV2Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbOptionFull[]**](../Model/WebCbOptionFull.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildOptionsV2Patch()`

```php
apiCustombuildOptionsV2Patch($data)
```

Patch custombuild options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = array(new \COMPITAUT\DirectAdminAPI\Model\WebCbOptionKV()); // \COMPITAUT\DirectAdminAPI\Model\WebCbOptionKV[] | List of key and value pairs to change

try {
    $apiInstance->apiCustombuildOptionsV2Patch($data);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildOptionsV2Patch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebCbOptionKV[]**](../Model/WebCbOptionKV.md)| List of key and value pairs to change | |

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

## `apiCustombuildOptionsValidateGet()`

```php
apiCustombuildOptionsValidateGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbOptionsValidateResponse
```

Get custombuild options validation message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildOptionsValidateGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildOptionsValidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbOptionsValidateResponse**](../Model/WebCbOptionsValidateResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildRemovalsGet()`

```php
apiCustombuildRemovalsGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbAction[]
```

List of custombuild commands to remove no longer needed software

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildRemovalsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildRemovalsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbAction[]**](../Model/WebCbAction.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildRunPost()`

```php
apiCustombuildRunPost($data): \COMPITAUT\DirectAdminAPI\Model\WebCbRunResponse
```

Run Custombuild

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebCbRunRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebCbRunRequest | Request Data

try {
    $result = $apiInstance->apiCustombuildRunPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildRunPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebCbRunRequest**](../Model/WebCbRunRequest.md)| Request Data | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbRunResponse**](../Model/WebCbRunResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildSoftwareGet()`

```php
apiCustombuildSoftwareGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbSoftware
```

Get available custombuild software

Report available custombuild software.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildSoftwareGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildSoftwareGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbSoftware**](../Model/WebCbSoftware.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildStateGet()`

```php
apiCustombuildStateGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbState
```

Get custombuild state

Get number of available updates and whether custombuild is currently running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildStateGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildStateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbState**](../Model/WebCbState.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildStateSseGet()`

```php
apiCustombuildStateSseGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbState
```

Get custombuild state stream

Get events about number of available updates and whether custombuild is currently running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildStateSseGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildStateSseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbState**](../Model/WebCbState.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildUpdatesGet()`

```php
apiCustombuildUpdatesGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbUpdate[]
```

Get available custombuild updates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildUpdatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildUpdatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbUpdate[]**](../Model/WebCbUpdate.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildVersionsCustomAppDelete()`

```php
apiCustombuildVersionsCustomAppDelete($app)
```

Delete custombuild's app's custom version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | Application name

try {
    $apiInstance->apiCustombuildVersionsCustomAppDelete($app);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildVersionsCustomAppDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| Application name | |

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

## `apiCustombuildVersionsCustomAppPut()`

```php
apiCustombuildVersionsCustomAppPut($app, $data): \COMPITAUT\DirectAdminAPI\Model\WebCbVersion
```

Set custombuild's app's custom version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | Application name
$data = new \COMPITAUT\DirectAdminAPI\Model\WebCbVersionsCustomRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebCbVersionsCustomRequest | Request Data

try {
    $result = $apiInstance->apiCustombuildVersionsCustomAppPut($app, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildVersionsCustomAppPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| Application name | |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebCbVersionsCustomRequest**](../Model/WebCbVersionsCustomRequest.md)| Request Data | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbVersion**](../Model/WebCbVersion.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildVersionsCustomGet()`

```php
apiCustombuildVersionsCustomGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbVersion[]
```

Get all custombuild's apps custom versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildVersionsCustomGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildVersionsCustomGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbVersion[]**](../Model/WebCbVersion.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustombuildVersionsGet()`

```php
apiCustombuildVersionsGet(): \COMPITAUT\DirectAdminAPI\Model\WebCbVersion[]
```

Get all custombuild's apps default versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\CustombuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustombuildVersionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustombuildApi->apiCustombuildVersionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebCbVersion[]**](../Model/WebCbVersion.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
