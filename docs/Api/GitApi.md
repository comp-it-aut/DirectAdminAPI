# COMPITAUT\DirectAdminAPI\GitApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiGitDomainDomainGet()**](GitApi.md#apiGitDomainDomainGet) | **GET** /api/git/domain/{domain} | Returns information about all the repositories under the user&#39;s domain |
| [**apiGitDomainDomainPost()**](GitApi.md#apiGitDomainDomainPost) | **POST** /api/git/domain/{domain} | Initializes a repository or clones a remote one |
| [**apiGitUserUsernameUuidUuidWebhookPost()**](GitApi.md#apiGitUserUsernameUuidUuidWebhookPost) | **POST** /api/git/user/{username}/uuid/{uuid}/webhook | fetches and deploys repository |
| [**apiGitUuidUuidBranchBranchGet()**](GitApi.md#apiGitUuidUuidBranchBranchGet) | **GET** /api/git/uuid/{uuid}/branch/{branch} | Returns repository&#39;s branch log history |
| [**apiGitUuidUuidCommitCommitGet()**](GitApi.md#apiGitUuidUuidCommitCommitGet) | **GET** /api/git/uuid/{uuid}/commit/{commit} | Returns commit information |
| [**apiGitUuidUuidDelete()**](GitApi.md#apiGitUuidUuidDelete) | **DELETE** /api/git/uuid/{uuid} | Removes repository |
| [**apiGitUuidUuidDeployPost()**](GitApi.md#apiGitUuidUuidDeployPost) | **POST** /api/git/uuid/{uuid}/deploy | Deploys bare repository to a working tree |
| [**apiGitUuidUuidFetchPost()**](GitApi.md#apiGitUuidUuidFetchPost) | **POST** /api/git/uuid/{uuid}/fetch | Fetches latest repository changes from the remote |
| [**apiGitUuidUuidGet()**](GitApi.md#apiGitUuidUuidGet) | **GET** /api/git/uuid/{uuid} | Returns information about one repository under user domain |
| [**apiGitUuidUuidPut()**](GitApi.md#apiGitUuidUuidPut) | **PUT** /api/git/uuid/{uuid} | Updates repository settings |


## `apiGitDomainDomainGet()`

```php
apiGitDomainDomainGet($domain): \COMPITAUT\DirectAdminAPI\Model\WebGitRepositoryResult[]
```

Returns information about all the repositories under the user's domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain

try {
    $result = $apiInstance->apiGitDomainDomainGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitDomainDomainGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebGitRepositoryResult[]**](../Model/WebGitRepositoryResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGitDomainDomainPost()`

```php
apiGitDomainDomainPost($domain, $payload): \COMPITAUT\DirectAdminAPI\Model\WebGitRepositoryResult
```

Initializes a repository or clones a remote one

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebGitCreateParameters(); // \COMPITAUT\DirectAdminAPI\Model\WebGitCreateParameters | payload

try {
    $result = $apiInstance->apiGitDomainDomainPost($domain, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitDomainDomainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebGitCreateParameters**](../Model/WebGitCreateParameters.md)| payload | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebGitRepositoryResult**](../Model/WebGitRepositoryResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGitUserUsernameUuidUuidWebhookPost()`

```php
apiGitUserUsernameUuidUuidWebhookPost($uuid, $username)
```

fetches and deploys repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID
$username = 'username_example'; // string | Username

try {
    $apiInstance->apiGitUserUsernameUuidUuidWebhookPost($uuid, $username);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUserUsernameUuidUuidWebhookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |
| **username** | **string**| Username | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGitUuidUuidBranchBranchGet()`

```php
apiGitUuidUuidBranchBranchGet($uuid, $branch, $skip, $limit): \COMPITAUT\DirectAdminAPI\Model\WebGitLogResult
```

Returns repository's branch log history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID
$branch = 'branch_example'; // string | Branch
$skip = 0; // int | Skip N commits
$limit = 10; // int | Limit

try {
    $result = $apiInstance->apiGitUuidUuidBranchBranchGet($uuid, $branch, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUuidUuidBranchBranchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |
| **branch** | **string**| Branch | |
| **skip** | **int**| Skip N commits | [optional] [default to 0] |
| **limit** | **int**| Limit | [optional] [default to 10] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebGitLogResult**](../Model/WebGitLogResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGitUuidUuidCommitCommitGet()`

```php
apiGitUuidUuidCommitCommitGet($uuid, $commit): \COMPITAUT\DirectAdminAPI\Model\WebGitCommitInfoResult
```

Returns commit information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID
$commit = 'commit_example'; // string | commit

try {
    $result = $apiInstance->apiGitUuidUuidCommitCommitGet($uuid, $commit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUuidUuidCommitCommitGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |
| **commit** | **string**| commit | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebGitCommitInfoResult**](../Model/WebGitCommitInfoResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGitUuidUuidDelete()`

```php
apiGitUuidUuidDelete($uuid)
```

Removes repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID

try {
    $apiInstance->apiGitUuidUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUuidUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |

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

## `apiGitUuidUuidDeployPost()`

```php
apiGitUuidUuidDeployPost($uuid)
```

Deploys bare repository to a working tree

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID

try {
    $apiInstance->apiGitUuidUuidDeployPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUuidUuidDeployPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |

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

## `apiGitUuidUuidFetchPost()`

```php
apiGitUuidUuidFetchPost($uuid)
```

Fetches latest repository changes from the remote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID

try {
    $apiInstance->apiGitUuidUuidFetchPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUuidUuidFetchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |

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

## `apiGitUuidUuidGet()`

```php
apiGitUuidUuidGet($uuid): \COMPITAUT\DirectAdminAPI\Model\WebGitRepositoryResult
```

Returns information about one repository under user domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID

try {
    $result = $apiInstance->apiGitUuidUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUuidUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebGitRepositoryResult**](../Model/WebGitRepositoryResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGitUuidUuidPut()`

```php
apiGitUuidUuidPut($uuid, $payload)
```

Updates repository settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\GitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebGitUpdateParameters(); // \COMPITAUT\DirectAdminAPI\Model\WebGitUpdateParameters | payload

try {
    $apiInstance->apiGitUuidUuidPut($uuid, $payload);
} catch (Exception $e) {
    echo 'Exception when calling GitApi->apiGitUuidUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID | |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebGitUpdateParameters**](../Model/WebGitUpdateParameters.md)| payload | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
