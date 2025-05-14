# COMPITAUT\DirectAdminAPI\DatabaseApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDbManageCloneDbPost()**](DatabaseApi.md#apiDbManageCloneDbPost) | **POST** /api/db-manage/clone-db | Clone database |
| [**apiDbManageCreateDbPost()**](DatabaseApi.md#apiDbManageCreateDbPost) | **POST** /api/db-manage/create-db | Create empty database |
| [**apiDbManageCreateDbWithUserPost()**](DatabaseApi.md#apiDbManageCreateDbWithUserPost) | **POST** /api/db-manage/create-db-with-user | Create database with user |
| [**apiDbManageCreateUserPost()**](DatabaseApi.md#apiDbManageCreateUserPost) | **POST** /api/db-manage/create-user | Create database user |
| [**apiDbManageDatabasesDatabaseCheckPost()**](DatabaseApi.md#apiDbManageDatabasesDatabaseCheckPost) | **POST** /api/db-manage/databases/{database}/check | Check database |
| [**apiDbManageDatabasesDatabaseDelete()**](DatabaseApi.md#apiDbManageDatabasesDatabaseDelete) | **DELETE** /api/db-manage/databases/{database} | Delete database |
| [**apiDbManageDatabasesDatabaseExportGet()**](DatabaseApi.md#apiDbManageDatabasesDatabaseExportGet) | **GET** /api/db-manage/databases/{database}/export | Export database |
| [**apiDbManageDatabasesDatabaseFixDefinersPost()**](DatabaseApi.md#apiDbManageDatabasesDatabaseFixDefinersPost) | **POST** /api/db-manage/databases/{database}/fix-definers | Fix broken database definers |
| [**apiDbManageDatabasesDatabaseImportPost()**](DatabaseApi.md#apiDbManageDatabasesDatabaseImportPost) | **POST** /api/db-manage/databases/{database}/import | Import database backup |
| [**apiDbManageDatabasesDatabaseOptimizePost()**](DatabaseApi.md#apiDbManageDatabasesDatabaseOptimizePost) | **POST** /api/db-manage/databases/{database}/optimize | Optimize database |
| [**apiDbManageDatabasesDatabaseRepairPost()**](DatabaseApi.md#apiDbManageDatabasesDatabaseRepairPost) | **POST** /api/db-manage/databases/{database}/repair | Repair database |
| [**apiDbManageUsersDbuserChangeHostsPost()**](DatabaseApi.md#apiDbManageUsersDbuserChangeHostsPost) | **POST** /api/db-manage/users/{dbuser}/change-hosts | Change database user hosts |
| [**apiDbManageUsersDbuserChangePasswordPost()**](DatabaseApi.md#apiDbManageUsersDbuserChangePasswordPost) | **POST** /api/db-manage/users/{dbuser}/change-password | Change database user password |
| [**apiDbManageUsersDbuserDatabasesDatabaseChangePrivsPut()**](DatabaseApi.md#apiDbManageUsersDbuserDatabasesDatabaseChangePrivsPut) | **PUT** /api/db-manage/users/{dbuser}/databases/{database}/change-privs | Set database privileges for dbuser |
| [**apiDbManageUsersDbuserDelete()**](DatabaseApi.md#apiDbManageUsersDbuserDelete) | **DELETE** /api/db-manage/users/{dbuser} | Delete database user |
| [**apiDbShowDatabasesDatabaseGet()**](DatabaseApi.md#apiDbShowDatabasesDatabaseGet) | **GET** /api/db-show/databases/{database} | Get Database metadata |
| [**apiDbShowDatabasesDatabaseUsersGet()**](DatabaseApi.md#apiDbShowDatabasesDatabaseUsersGet) | **GET** /api/db-show/databases/{database}/users | Get Database info |
| [**apiDbShowDatabasesGet()**](DatabaseApi.md#apiDbShowDatabasesGet) | **GET** /api/db-show/databases | Get Databases list |
| [**apiDbShowInfoGet()**](DatabaseApi.md#apiDbShowInfoGet) | **GET** /api/db-show/info | Database server info |
| [**apiDbShowUsersDbuserDatabasesGet()**](DatabaseApi.md#apiDbShowUsersDbuserDatabasesGet) | **GET** /api/db-show/users/{dbuser}/databases | Get user databases |
| [**apiDbShowUsersDbuserGet()**](DatabaseApi.md#apiDbShowUsersDbuserGet) | **GET** /api/db-show/users/{dbuser} | Get User |
| [**apiDbShowUsersGet()**](DatabaseApi.md#apiDbShowUsersGet) | **GET** /api/db-show/users | Get Users |
| [**apiPhpmyadminSsoAccountAccessPost()**](DatabaseApi.md#apiPhpmyadminSsoAccountAccessPost) | **POST** /api/phpmyadmin-sso/account-access | Create PhpMyAdmin single sign-on URL for user account access. |
| [**apiPhpmyadminSsoDatabaseAccessDatabasePost()**](DatabaseApi.md#apiPhpmyadminSsoDatabaseAccessDatabasePost) | **POST** /api/phpmyadmin-sso/database-access/{database} | Create PhpMyAdmin single sign-on URL for single DB access. |


## `apiDbManageCloneDbPost()`

```php
apiDbManageCloneDbPost($data): \COMPITAUT\DirectAdminAPI\Model\WebDbCloneDatabaseResponse
```

Clone database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebDbCloneDatabaseRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebDbCloneDatabaseRequest | Data.

try {
    $result = $apiInstance->apiDbManageCloneDbPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageCloneDbPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbCloneDatabaseRequest**](../Model/WebDbCloneDatabaseRequest.md)| Data. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbCloneDatabaseResponse**](../Model/WebDbCloneDatabaseResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbManageCreateDbPost()`

```php
apiDbManageCreateDbPost($data)
```

Create empty database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebDbCreateDatabaseRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebDbCreateDatabaseRequest | Data.

try {
    $apiInstance->apiDbManageCreateDbPost($data);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageCreateDbPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbCreateDatabaseRequest**](../Model/WebDbCreateDatabaseRequest.md)| Data. | |

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

## `apiDbManageCreateDbWithUserPost()`

```php
apiDbManageCreateDbWithUserPost($data): \COMPITAUT\DirectAdminAPI\Model\WebDbFullConnectionResponse
```

Create database with user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebDbCreateDatabaseWithUserRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebDbCreateDatabaseWithUserRequest | Data.

try {
    $result = $apiInstance->apiDbManageCreateDbWithUserPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageCreateDbWithUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbCreateDatabaseWithUserRequest**](../Model/WebDbCreateDatabaseWithUserRequest.md)| Data. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbFullConnectionResponse**](../Model/WebDbFullConnectionResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbManageCreateUserPost()`

```php
apiDbManageCreateUserPost($data)
```

Create database user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebDbCreateUserRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebDbCreateUserRequest | Data.

try {
    $apiInstance->apiDbManageCreateUserPost($data);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageCreateUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbCreateUserRequest**](../Model/WebDbCreateUserRequest.md)| Data. | |

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

## `apiDbManageDatabasesDatabaseCheckPost()`

```php
apiDbManageDatabasesDatabaseCheckPost($database): \COMPITAUT\DirectAdminAPI\Model\WebDbTableActionResult[]
```

Check database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.

try {
    $result = $apiInstance->apiDbManageDatabasesDatabaseCheckPost($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageDatabasesDatabaseCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbTableActionResult[]**](../Model/WebDbTableActionResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbManageDatabasesDatabaseDelete()`

```php
apiDbManageDatabasesDatabaseDelete($database, $dropOrphanUsers)
```

Delete database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.
$dropOrphanUsers = True; // bool | Delete users which had access only to the deleted database.

try {
    $apiInstance->apiDbManageDatabasesDatabaseDelete($database, $dropOrphanUsers);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageDatabasesDatabaseDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |
| **dropOrphanUsers** | **bool**| Delete users which had access only to the deleted database. | [optional] |

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

## `apiDbManageDatabasesDatabaseExportGet()`

```php
apiDbManageDatabasesDatabaseExportGet($database, $gzip): \SplFileObject
```

Export database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.
$gzip = false; // bool | Gzipped export.

try {
    $result = $apiInstance->apiDbManageDatabasesDatabaseExportGet($database, $gzip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageDatabasesDatabaseExportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |
| **gzip** | **bool**| Gzipped export. | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/sql`, `application/x-gzip`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbManageDatabasesDatabaseFixDefinersPost()`

```php
apiDbManageDatabasesDatabaseFixDefinersPost($database)
```

Fix broken database definers

Fix broken definers for views, events, routines and triggers in the database. Broken definers include non-existing dbusers or dbusers directadmin user does not have access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.

try {
    $apiInstance->apiDbManageDatabasesDatabaseFixDefinersPost($database);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageDatabasesDatabaseFixDefinersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |

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

## `apiDbManageDatabasesDatabaseImportPost()`

```php
apiDbManageDatabasesDatabaseImportPost($database, $sqlfile, $clean)
```

Import database backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.
$sqlfile = '/path/to/file.txt'; // \SplFileObject | SQL file to import (can be gzipped).
$clean = false; // bool | Clean database before importing.

try {
    $apiInstance->apiDbManageDatabasesDatabaseImportPost($database, $sqlfile, $clean);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageDatabasesDatabaseImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |
| **sqlfile** | **\SplFileObject****\SplFileObject**| SQL file to import (can be gzipped). | |
| **clean** | **bool**| Clean database before importing. | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbManageDatabasesDatabaseOptimizePost()`

```php
apiDbManageDatabasesDatabaseOptimizePost($database): \COMPITAUT\DirectAdminAPI\Model\WebDbTableActionResult[]
```

Optimize database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.

try {
    $result = $apiInstance->apiDbManageDatabasesDatabaseOptimizePost($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageDatabasesDatabaseOptimizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbTableActionResult[]**](../Model/WebDbTableActionResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbManageDatabasesDatabaseRepairPost()`

```php
apiDbManageDatabasesDatabaseRepairPost($database): \COMPITAUT\DirectAdminAPI\Model\WebDbTableActionResult[]
```

Repair database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.

try {
    $result = $apiInstance->apiDbManageDatabasesDatabaseRepairPost($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageDatabasesDatabaseRepairPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbTableActionResult[]**](../Model/WebDbTableActionResult.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbManageUsersDbuserChangeHostsPost()`

```php
apiDbManageUsersDbuserChangeHostsPost($dbuser, $data)
```

Change database user hosts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dbuser = 'dbuser_example'; // string | Database user.
$data = array('data_example'); // string[] | New user's host patterns. Valid values include wildcard '%', 'localhost', IPv4 and IPv6 addresses. At least one host pattern must exist but no more than 30.

try {
    $apiInstance->apiDbManageUsersDbuserChangeHostsPost($dbuser, $data);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageUsersDbuserChangeHostsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dbuser** | **string**| Database user. | |
| **data** | [**string[]**](../Model/string.md)| New user&#39;s host patterns. Valid values include wildcard &#39;%&#39;, &#39;localhost&#39;, IPv4 and IPv6 addresses. At least one host pattern must exist but no more than 30. | |

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

## `apiDbManageUsersDbuserChangePasswordPost()`

```php
apiDbManageUsersDbuserChangePasswordPost($dbuser, $data)
```

Change database user password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dbuser = 'dbuser_example'; // string | Database user.
$data = new \COMPITAUT\DirectAdminAPI\Model\WebDbUserChangePasswordRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebDbUserChangePasswordRequest | Data.

try {
    $apiInstance->apiDbManageUsersDbuserChangePasswordPost($dbuser, $data);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageUsersDbuserChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dbuser** | **string**| Database user. | |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbUserChangePasswordRequest**](../Model/WebDbUserChangePasswordRequest.md)| Data. | |

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

## `apiDbManageUsersDbuserDatabasesDatabaseChangePrivsPut()`

```php
apiDbManageUsersDbuserDatabasesDatabaseChangePrivsPut($database, $dbuser, $data)
```

Set database privileges for dbuser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.
$dbuser = 'dbuser_example'; // string | Database user.
$data = new \COMPITAUT\DirectAdminAPI\Model\WebDbUserChangePrivsRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebDbUserChangePrivsRequest | Data.

try {
    $apiInstance->apiDbManageUsersDbuserDatabasesDatabaseChangePrivsPut($database, $dbuser, $data);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageUsersDbuserDatabasesDatabaseChangePrivsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |
| **dbuser** | **string**| Database user. | |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbUserChangePrivsRequest**](../Model/WebDbUserChangePrivsRequest.md)| Data. | |

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

## `apiDbManageUsersDbuserDelete()`

```php
apiDbManageUsersDbuserDelete($dbuser)
```

Delete database user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dbuser = 'dbuser_example'; // string | Database user.

try {
    $apiInstance->apiDbManageUsersDbuserDelete($dbuser);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbManageUsersDbuserDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dbuser** | **string**| Database user. | |

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

## `apiDbShowDatabasesDatabaseGet()`

```php
apiDbShowDatabasesDatabaseGet($database): \COMPITAUT\DirectAdminAPI\Model\WebDbDatabaseMetadata
```

Get Database metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.

try {
    $result = $apiInstance->apiDbShowDatabasesDatabaseGet($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbShowDatabasesDatabaseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbDatabaseMetadata**](../Model/WebDbDatabaseMetadata.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbShowDatabasesDatabaseUsersGet()`

```php
apiDbShowDatabasesDatabaseUsersGet($database, $includeTemporary): \COMPITAUT\DirectAdminAPI\Model\WebDbDatabaseUser[]
```

Get Database info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database.
$includeTemporary = false; // bool | Include temporary users in the result.

try {
    $result = $apiInstance->apiDbShowDatabasesDatabaseUsersGet($database, $includeTemporary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbShowDatabasesDatabaseUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database. | |
| **includeTemporary** | **bool**| Include temporary users in the result. | [optional] [default to false] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbDatabaseUser[]**](../Model/WebDbDatabaseUser.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbShowDatabasesGet()`

```php
apiDbShowDatabasesGet($noSize): \COMPITAUT\DirectAdminAPI\Model\WebDbDatabaseListEntry[]
```

Get Databases list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$noSize = false; // bool | Do not compute size for the databases.

try {
    $result = $apiInstance->apiDbShowDatabasesGet($noSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbShowDatabasesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **noSize** | **bool**| Do not compute size for the databases. | [optional] [default to false] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbDatabaseListEntry[]**](../Model/WebDbDatabaseListEntry.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbShowInfoGet()`

```php
apiDbShowInfoGet(): \COMPITAUT\DirectAdminAPI\Model\WebDbInfoResponse
```

Database server info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiDbShowInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbShowInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbInfoResponse**](../Model/WebDbInfoResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbShowUsersDbuserDatabasesGet()`

```php
apiDbShowUsersDbuserDatabasesGet($dbuser): \COMPITAUT\DirectAdminAPI\Model\WebDbUserDatabase[]
```

Get user databases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dbuser = 'dbuser_example'; // string | Database user.

try {
    $result = $apiInstance->apiDbShowUsersDbuserDatabasesGet($dbuser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbShowUsersDbuserDatabasesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dbuser** | **string**| Database user. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbUserDatabase[]**](../Model/WebDbUserDatabase.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbShowUsersDbuserGet()`

```php
apiDbShowUsersDbuserGet($dbuser): \COMPITAUT\DirectAdminAPI\Model\WebDbUser
```

Get User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dbuser = 'dbuser_example'; // string | Database user.

try {
    $result = $apiInstance->apiDbShowUsersDbuserGet($dbuser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbShowUsersDbuserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dbuser** | **string**| Database user. | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbUser**](../Model/WebDbUser.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDbShowUsersGet()`

```php
apiDbShowUsersGet($includeTemporary): \COMPITAUT\DirectAdminAPI\Model\WebDbUser[]
```

Get Users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeTemporary = false; // bool | Include temporary users in the result.

try {
    $result = $apiInstance->apiDbShowUsersGet($includeTemporary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiDbShowUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **includeTemporary** | **bool**| Include temporary users in the result. | [optional] [default to false] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebDbUser[]**](../Model/WebDbUser.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPhpmyadminSsoAccountAccessPost()`

```php
apiPhpmyadminSsoAccountAccessPost(): \COMPITAUT\DirectAdminAPI\Model\WebPhpmyadminSSOResponse
```

Create PhpMyAdmin single sign-on URL for user account access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiPhpmyadminSsoAccountAccessPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiPhpmyadminSsoAccountAccessPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebPhpmyadminSSOResponse**](../Model/WebPhpmyadminSSOResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPhpmyadminSsoDatabaseAccessDatabasePost()`

```php
apiPhpmyadminSsoDatabaseAccessDatabasePost($database): \COMPITAUT\DirectAdminAPI\Model\WebPhpmyadminSSOResponse
```

Create PhpMyAdmin single sign-on URL for single DB access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | Database name

try {
    $result = $apiInstance->apiPhpmyadminSsoDatabaseAccessDatabasePost($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->apiPhpmyadminSsoDatabaseAccessDatabasePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database name | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebPhpmyadminSSOResponse**](../Model/WebPhpmyadminSSOResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
