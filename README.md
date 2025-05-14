# DirectAdminAPI

Swagger API for DirectAdmin server


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/comp-it-aut/DirectAdminAPI.git"
    }
  ],
  "require": {
    "comp-it-aut/DirectAdminAPI": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/DirectAdminAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiAdminUsageGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiAdminUsageGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**apiAdminUsageGet**](docs/Api/AdminApi.md#apiadminusageget) | **GET** /api/admin-usage | Get admin&#39;s usage
*ClamAVApi* | [**apiClamavGet**](docs/Api/ClamAVApi.md#apiclamavget) | **GET** /api/clamav | Get clamAV processes
*ClamAVApi* | [**apiClamavPidDelete**](docs/Api/ClamAVApi.md#apiclamavpiddelete) | **DELETE** /api/clamav/{pid} | Cancel the clamAV process by PID
*ClamAVApi* | [**apiClamavPost**](docs/Api/ClamAVApi.md#apiclamavpost) | **POST** /api/clamav | Scan directories in the specified path
*CpanelApi* | [**apiCpanelImportCheckRemotePost**](docs/Api/CpanelApi.md#apicpanelimportcheckremotepost) | **POST** /api/cpanel-import/check-remote | Checks SSH connection to remote cPanel server and returns list of remote users
*CpanelApi* | [**apiCpanelImportTasksGet**](docs/Api/CpanelApi.md#apicpanelimporttasksget) | **GET** /api/cpanel-import/tasks | List all cPanel import tasks
*CpanelApi* | [**apiCpanelImportTasksIdDelete**](docs/Api/CpanelApi.md#apicpanelimporttasksiddelete) | **DELETE** /api/cpanel-import/tasks/{id} | Delete single pending cPanel import task
*CpanelApi* | [**apiCpanelImportTasksIdGet**](docs/Api/CpanelApi.md#apicpanelimporttasksidget) | **GET** /api/cpanel-import/tasks/{id} | Get single cPanel import task
*CpanelApi* | [**apiCpanelImportTasksIdLogGet**](docs/Api/CpanelApi.md#apicpanelimporttasksidlogget) | **GET** /api/cpanel-import/tasks/{id}/log | Retrieve single import task log
*CpanelApi* | [**apiCpanelImportTasksIdLogSseGet**](docs/Api/CpanelApi.md#apicpanelimporttasksidlogsseget) | **GET** /api/cpanel-import/tasks/{id}/log-sse | Stream import task log
*CpanelApi* | [**apiCpanelImportTasksStartPost**](docs/Api/CpanelApi.md#apicpanelimporttasksstartpost) | **POST** /api/cpanel-import/tasks/start | Starts remote cPanel account import to local DirectAdmin server
*CustombuildApi* | [**apiCustombuildActionsGet**](docs/Api/CustombuildApi.md#apicustombuildactionsget) | **GET** /api/custombuild/actions | Get available custombuild actions
*CustombuildApi* | [**apiCustombuildCompileScriptsAppGet**](docs/Api/CustombuildApi.md#apicustombuildcompilescriptsappget) | **GET** /api/custombuild/compile-scripts/{app} | Get custombuild&#39;s app&#39;s default compile script
*CustombuildApi* | [**apiCustombuildCompileScriptsCustomAppDelete**](docs/Api/CustombuildApi.md#apicustombuildcompilescriptscustomappdelete) | **DELETE** /api/custombuild/compile-scripts-custom/{app} | Delete custombuild&#39;s app&#39;s custom compile script (reset to default)
*CustombuildApi* | [**apiCustombuildCompileScriptsCustomAppGet**](docs/Api/CustombuildApi.md#apicustombuildcompilescriptscustomappget) | **GET** /api/custombuild/compile-scripts-custom/{app} | Get custombuild&#39;s app&#39;s customized compile script
*CustombuildApi* | [**apiCustombuildCompileScriptsCustomAppPut**](docs/Api/CustombuildApi.md#apicustombuildcompilescriptscustomappput) | **PUT** /api/custombuild/compile-scripts-custom/{app} | Set custombuild&#39;s app&#39;s custom compile script
*CustombuildApi* | [**apiCustombuildCompileScriptsGet**](docs/Api/CustombuildApi.md#apicustombuildcompilescriptsget) | **GET** /api/custombuild/compile-scripts | Get all custombuild&#39;s apps&#39; compile scripts metadata
*CustombuildApi* | [**apiCustombuildKillPost**](docs/Api/CustombuildApi.md#apicustombuildkillpost) | **POST** /api/custombuild/kill | Kill custombuild
*CustombuildApi* | [**apiCustombuildLogsGet**](docs/Api/CustombuildApi.md#apicustombuildlogsget) | **GET** /api/custombuild/logs | Get all custombuild log files metadata
*CustombuildApi* | [**apiCustombuildLogsLognameDelete**](docs/Api/CustombuildApi.md#apicustombuildlogslognamedelete) | **DELETE** /api/custombuild/logs/{logname} | Delete custombuild log
*CustombuildApi* | [**apiCustombuildLogsLognameSseGet**](docs/Api/CustombuildApi.md#apicustombuildlogslognamesseget) | **GET** /api/custombuild/logs/{logname}/sse | Stream custombuild log file
*CustombuildApi* | [**apiCustombuildOptionsGet**](docs/Api/CustombuildApi.md#apicustombuildoptionsget) | **GET** /api/custombuild/options | Get custombuild options
*CustombuildApi* | [**apiCustombuildOptionsPatch**](docs/Api/CustombuildApi.md#apicustombuildoptionspatch) | **PATCH** /api/custombuild/options | Patch custombuild options
*CustombuildApi* | [**apiCustombuildOptionsV2Get**](docs/Api/CustombuildApi.md#apicustombuildoptionsv2get) | **GET** /api/custombuild/options-v2 | Get custombuild options
*CustombuildApi* | [**apiCustombuildOptionsV2Patch**](docs/Api/CustombuildApi.md#apicustombuildoptionsv2patch) | **PATCH** /api/custombuild/options-v2 | Patch custombuild options
*CustombuildApi* | [**apiCustombuildOptionsValidateGet**](docs/Api/CustombuildApi.md#apicustombuildoptionsvalidateget) | **GET** /api/custombuild/options/validate | Get custombuild options validation message
*CustombuildApi* | [**apiCustombuildRemovalsGet**](docs/Api/CustombuildApi.md#apicustombuildremovalsget) | **GET** /api/custombuild/removals | List of custombuild commands to remove no longer needed software
*CustombuildApi* | [**apiCustombuildRunPost**](docs/Api/CustombuildApi.md#apicustombuildrunpost) | **POST** /api/custombuild/run | Run Custombuild
*CustombuildApi* | [**apiCustombuildSoftwareGet**](docs/Api/CustombuildApi.md#apicustombuildsoftwareget) | **GET** /api/custombuild/software | Get available custombuild software
*CustombuildApi* | [**apiCustombuildStateGet**](docs/Api/CustombuildApi.md#apicustombuildstateget) | **GET** /api/custombuild/state | Get custombuild state
*CustombuildApi* | [**apiCustombuildStateSseGet**](docs/Api/CustombuildApi.md#apicustombuildstatesseget) | **GET** /api/custombuild/state/sse | Get custombuild state stream
*CustombuildApi* | [**apiCustombuildUpdatesGet**](docs/Api/CustombuildApi.md#apicustombuildupdatesget) | **GET** /api/custombuild/updates | Get available custombuild updates
*CustombuildApi* | [**apiCustombuildVersionsCustomAppDelete**](docs/Api/CustombuildApi.md#apicustombuildversionscustomappdelete) | **DELETE** /api/custombuild/versions-custom/{app} | Delete custombuild&#39;s app&#39;s custom version
*CustombuildApi* | [**apiCustombuildVersionsCustomAppPut**](docs/Api/CustombuildApi.md#apicustombuildversionscustomappput) | **PUT** /api/custombuild/versions-custom/{app} | Set custombuild&#39;s app&#39;s custom version
*CustombuildApi* | [**apiCustombuildVersionsCustomGet**](docs/Api/CustombuildApi.md#apicustombuildversionscustomget) | **GET** /api/custombuild/versions-custom | Get all custombuild&#39;s apps custom versions
*CustombuildApi* | [**apiCustombuildVersionsGet**](docs/Api/CustombuildApi.md#apicustombuildversionsget) | **GET** /api/custombuild/versions | Get all custombuild&#39;s apps default versions
*DatabaseApi* | [**apiDbManageCloneDbPost**](docs/Api/DatabaseApi.md#apidbmanageclonedbpost) | **POST** /api/db-manage/clone-db | Clone database
*DatabaseApi* | [**apiDbManageCreateDbPost**](docs/Api/DatabaseApi.md#apidbmanagecreatedbpost) | **POST** /api/db-manage/create-db | Create empty database
*DatabaseApi* | [**apiDbManageCreateDbWithUserPost**](docs/Api/DatabaseApi.md#apidbmanagecreatedbwithuserpost) | **POST** /api/db-manage/create-db-with-user | Create database with user
*DatabaseApi* | [**apiDbManageCreateUserPost**](docs/Api/DatabaseApi.md#apidbmanagecreateuserpost) | **POST** /api/db-manage/create-user | Create database user
*DatabaseApi* | [**apiDbManageDatabasesDatabaseCheckPost**](docs/Api/DatabaseApi.md#apidbmanagedatabasesdatabasecheckpost) | **POST** /api/db-manage/databases/{database}/check | Check database
*DatabaseApi* | [**apiDbManageDatabasesDatabaseDelete**](docs/Api/DatabaseApi.md#apidbmanagedatabasesdatabasedelete) | **DELETE** /api/db-manage/databases/{database} | Delete database
*DatabaseApi* | [**apiDbManageDatabasesDatabaseExportGet**](docs/Api/DatabaseApi.md#apidbmanagedatabasesdatabaseexportget) | **GET** /api/db-manage/databases/{database}/export | Export database
*DatabaseApi* | [**apiDbManageDatabasesDatabaseFixDefinersPost**](docs/Api/DatabaseApi.md#apidbmanagedatabasesdatabasefixdefinerspost) | **POST** /api/db-manage/databases/{database}/fix-definers | Fix broken database definers
*DatabaseApi* | [**apiDbManageDatabasesDatabaseImportPost**](docs/Api/DatabaseApi.md#apidbmanagedatabasesdatabaseimportpost) | **POST** /api/db-manage/databases/{database}/import | Import database backup
*DatabaseApi* | [**apiDbManageDatabasesDatabaseOptimizePost**](docs/Api/DatabaseApi.md#apidbmanagedatabasesdatabaseoptimizepost) | **POST** /api/db-manage/databases/{database}/optimize | Optimize database
*DatabaseApi* | [**apiDbManageDatabasesDatabaseRepairPost**](docs/Api/DatabaseApi.md#apidbmanagedatabasesdatabaserepairpost) | **POST** /api/db-manage/databases/{database}/repair | Repair database
*DatabaseApi* | [**apiDbManageUsersDbuserChangeHostsPost**](docs/Api/DatabaseApi.md#apidbmanageusersdbuserchangehostspost) | **POST** /api/db-manage/users/{dbuser}/change-hosts | Change database user hosts
*DatabaseApi* | [**apiDbManageUsersDbuserChangePasswordPost**](docs/Api/DatabaseApi.md#apidbmanageusersdbuserchangepasswordpost) | **POST** /api/db-manage/users/{dbuser}/change-password | Change database user password
*DatabaseApi* | [**apiDbManageUsersDbuserDatabasesDatabaseChangePrivsPut**](docs/Api/DatabaseApi.md#apidbmanageusersdbuserdatabasesdatabasechangeprivsput) | **PUT** /api/db-manage/users/{dbuser}/databases/{database}/change-privs | Set database privileges for dbuser
*DatabaseApi* | [**apiDbManageUsersDbuserDelete**](docs/Api/DatabaseApi.md#apidbmanageusersdbuserdelete) | **DELETE** /api/db-manage/users/{dbuser} | Delete database user
*DatabaseApi* | [**apiDbShowDatabasesDatabaseGet**](docs/Api/DatabaseApi.md#apidbshowdatabasesdatabaseget) | **GET** /api/db-show/databases/{database} | Get Database metadata
*DatabaseApi* | [**apiDbShowDatabasesDatabaseUsersGet**](docs/Api/DatabaseApi.md#apidbshowdatabasesdatabaseusersget) | **GET** /api/db-show/databases/{database}/users | Get Database info
*DatabaseApi* | [**apiDbShowDatabasesGet**](docs/Api/DatabaseApi.md#apidbshowdatabasesget) | **GET** /api/db-show/databases | Get Databases list
*DatabaseApi* | [**apiDbShowInfoGet**](docs/Api/DatabaseApi.md#apidbshowinfoget) | **GET** /api/db-show/info | Database server info
*DatabaseApi* | [**apiDbShowUsersDbuserDatabasesGet**](docs/Api/DatabaseApi.md#apidbshowusersdbuserdatabasesget) | **GET** /api/db-show/users/{dbuser}/databases | Get user databases
*DatabaseApi* | [**apiDbShowUsersDbuserGet**](docs/Api/DatabaseApi.md#apidbshowusersdbuserget) | **GET** /api/db-show/users/{dbuser} | Get User
*DatabaseApi* | [**apiDbShowUsersGet**](docs/Api/DatabaseApi.md#apidbshowusersget) | **GET** /api/db-show/users | Get Users
*DatabaseApi* | [**apiPhpmyadminSsoAccountAccessPost**](docs/Api/DatabaseApi.md#apiphpmyadminssoaccountaccesspost) | **POST** /api/phpmyadmin-sso/account-access | Create PhpMyAdmin single sign-on URL for user account access.
*DatabaseApi* | [**apiPhpmyadminSsoDatabaseAccessDatabasePost**](docs/Api/DatabaseApi.md#apiphpmyadminssodatabaseaccessdatabasepost) | **POST** /api/phpmyadmin-sso/database-access/{database} | Create PhpMyAdmin single sign-on URL for single DB access.
*DatabaseMonitorApi* | [**apiDbMonitorProcessesGet**](docs/Api/DatabaseMonitorApi.md#apidbmonitorprocessesget) | **GET** /api/db-monitor/processes | Get database processes list
*DatabaseMonitorApi* | [**apiDbMonitorProcessesIdKillPost**](docs/Api/DatabaseMonitorApi.md#apidbmonitorprocessesidkillpost) | **POST** /api/db-monitor/processes/{id}/kill | Kill database thread
*EmailApi* | [**apiEmailConfigMobileconfigGet**](docs/Api/EmailApi.md#apiemailconfigmobileconfigget) | **GET** /api/email-config/mobileconfig | Download Apple Mail Configuration Profile
*EmailApi* | [**apiEmailLogsGet**](docs/Api/EmailApi.md#apiemaillogsget) | **GET** /api/email-logs | Get email logs
*EmailApi* | [**apiEmailLogsSummaryGet**](docs/Api/EmailApi.md#apiemaillogssummaryget) | **GET** /api/email-logs-summary | Get emails log summary
*ExecApi* | [**apiExecutePost**](docs/Api/ExecApi.md#apiexecutepost) | **POST** /api/execute | Executes command with options under user privileges
*FilemanagerApi* | [**apiFilemanagerDiskUsageGet**](docs/Api/FilemanagerApi.md#apifilemanagerdiskusageget) | **GET** /api/filemanager/disk-usage | Disk usage.
*FilemanagerApi* | [**apiFilemanagerDownloadGet**](docs/Api/FilemanagerApi.md#apifilemanagerdownloadget) | **GET** /api/filemanager/download | Download file.
*FilemanagerApi* | [**apiFilemanagerListGet**](docs/Api/FilemanagerApi.md#apifilemanagerlistget) | **GET** /api/filemanager/list | List directory contents.
*FilemanagerApi* | [**apiFilemanagerMetadataGet**](docs/Api/FilemanagerApi.md#apifilemanagermetadataget) | **GET** /api/filemanager/metadata | File metadata.
*FilemanagerApi* | [**apiFilemanagerTreeGet**](docs/Api/FilemanagerApi.md#apifilemanagertreeget) | **GET** /api/filemanager/tree | Directories tree.
*FilemanagerApi* | [**apiFilemanagerUploadPost**](docs/Api/FilemanagerApi.md#apifilemanageruploadpost) | **POST** /api/filemanager/upload | Upload file.
*GitApi* | [**apiGitDomainDomainGet**](docs/Api/GitApi.md#apigitdomaindomainget) | **GET** /api/git/domain/{domain} | Returns information about all the repositories under the user&#39;s domain
*GitApi* | [**apiGitDomainDomainPost**](docs/Api/GitApi.md#apigitdomaindomainpost) | **POST** /api/git/domain/{domain} | Initializes a repository or clones a remote one
*GitApi* | [**apiGitUserUsernameUuidUuidWebhookPost**](docs/Api/GitApi.md#apigituserusernameuuiduuidwebhookpost) | **POST** /api/git/user/{username}/uuid/{uuid}/webhook | fetches and deploys repository
*GitApi* | [**apiGitUuidUuidBranchBranchGet**](docs/Api/GitApi.md#apigituuiduuidbranchbranchget) | **GET** /api/git/uuid/{uuid}/branch/{branch} | Returns repository&#39;s branch log history
*GitApi* | [**apiGitUuidUuidCommitCommitGet**](docs/Api/GitApi.md#apigituuiduuidcommitcommitget) | **GET** /api/git/uuid/{uuid}/commit/{commit} | Returns commit information
*GitApi* | [**apiGitUuidUuidDelete**](docs/Api/GitApi.md#apigituuiduuiddelete) | **DELETE** /api/git/uuid/{uuid} | Removes repository
*GitApi* | [**apiGitUuidUuidDeployPost**](docs/Api/GitApi.md#apigituuiduuiddeploypost) | **POST** /api/git/uuid/{uuid}/deploy | Deploys bare repository to a working tree
*GitApi* | [**apiGitUuidUuidFetchPost**](docs/Api/GitApi.md#apigituuiduuidfetchpost) | **POST** /api/git/uuid/{uuid}/fetch | Fetches latest repository changes from the remote
*GitApi* | [**apiGitUuidUuidGet**](docs/Api/GitApi.md#apigituuiduuidget) | **GET** /api/git/uuid/{uuid} | Returns information about one repository under user domain
*GitApi* | [**apiGitUuidUuidPut**](docs/Api/GitApi.md#apigituuiduuidput) | **PUT** /api/git/uuid/{uuid} | Updates repository settings
*ImapsyncApi* | [**apiImapsyncExportPost**](docs/Api/ImapsyncApi.md#apiimapsyncexportpost) | **POST** /api/imapsync/export | Export emails over IMAP from DirecTadmin server to external server
*ImapsyncApi* | [**apiImapsyncImportPost**](docs/Api/ImapsyncApi.md#apiimapsyncimportpost) | **POST** /api/imapsync/import | Import emails over IMAP from external server to DirectAdmin server
*ImapsyncApi* | [**apiImapsyncMigrationsGet**](docs/Api/ImapsyncApi.md#apiimapsyncmigrationsget) | **GET** /api/imapsync/migrations | List all running imapsync migrations
*ImapsyncApi* | [**apiImapsyncMigrationsIdDelete**](docs/Api/ImapsyncApi.md#apiimapsyncmigrationsiddelete) | **DELETE** /api/imapsync/migrations/{id} | Cancel imapsync migration
*InfoApi* | [**apiInfoGet**](docs/Api/InfoApi.md#apiinfoget) | **GET** /api/info | Get basic server info
*InfoApi* | [**apiSystemInfoCpuGet**](docs/Api/InfoApi.md#apisysteminfocpuget) | **GET** /api/system-info/cpu | Get system CPU
*InfoApi* | [**apiSystemInfoFsGet**](docs/Api/InfoApi.md#apisysteminfofsget) | **GET** /api/system-info/fs | Get file system space usage
*InfoApi* | [**apiSystemInfoLoadGet**](docs/Api/InfoApi.md#apisysteminfoloadget) | **GET** /api/system-info/load | Get system load
*InfoApi* | [**apiSystemInfoMemoryGet**](docs/Api/InfoApi.md#apisysteminfomemoryget) | **GET** /api/system-info/memory | Get system memory
*InfoApi* | [**apiSystemInfoServicesGet**](docs/Api/InfoApi.md#apisysteminfoservicesget) | **GET** /api/system-info/services | Get system services
*InfoApi* | [**apiSystemInfoUptimeGet**](docs/Api/InfoApi.md#apisysteminfouptimeget) | **GET** /api/system-info/uptime | Get system uptime
*LicensingApi* | [**apiLicenseGet**](docs/Api/LicensingApi.md#apilicenseget) | **GET** /api/license | Get license info
*LicensingApi* | [**apiLicenseProofGet**](docs/Api/LicensingApi.md#apilicenseproofget) | **GET** /api/license/proof | Get license session proof
*LicensingApi* | [**apiLicenseUpdateKeyPost**](docs/Api/LicensingApi.md#apilicenseupdatekeypost) | **POST** /api/license/update-key | Change license key
*LoginKeysApi* | [**apiLoginKeysCommandsGet**](docs/Api/LoginKeysApi.md#apiloginkeyscommandsget) | **GET** /api/login-keys/commands | Get all commands available for login keys
*LoginKeysApi* | [**apiLoginKeysKeysGet**](docs/Api/LoginKeysApi.md#apiloginkeyskeysget) | **GET** /api/login-keys/keys | Get all login keys
*LoginKeysApi* | [**apiLoginKeysKeysIdDelete**](docs/Api/LoginKeysApi.md#apiloginkeyskeysiddelete) | **DELETE** /api/login-keys/keys/{id} | Delete login key
*LoginKeysApi* | [**apiLoginKeysKeysIdGet**](docs/Api/LoginKeysApi.md#apiloginkeyskeysidget) | **GET** /api/login-keys/keys/{id} | Get login key
*LoginKeysApi* | [**apiLoginKeysKeysIdHistoryGet**](docs/Api/LoginKeysApi.md#apiloginkeyskeysidhistoryget) | **GET** /api/login-keys/keys/{id}/history | Get login key history
*LoginKeysApi* | [**apiLoginKeysKeysIdPatch**](docs/Api/LoginKeysApi.md#apiloginkeyskeysidpatch) | **PATCH** /api/login-keys/keys/{id} | Update login key
*LoginKeysApi* | [**apiLoginKeysKeysPost**](docs/Api/LoginKeysApi.md#apiloginkeyskeyspost) | **POST** /api/login-keys/keys | Create login key
*LoginKeysApi* | [**apiLoginKeysUrlsGet**](docs/Api/LoginKeysApi.md#apiloginkeysurlsget) | **GET** /api/login-keys/urls | Get all login URLs
*LoginKeysApi* | [**apiLoginKeysUrlsIdDelete**](docs/Api/LoginKeysApi.md#apiloginkeysurlsiddelete) | **DELETE** /api/login-keys/urls/{id} | Delete login URL
*LoginKeysApi* | [**apiLoginKeysUrlsPost**](docs/Api/LoginKeysApi.md#apiloginkeysurlspost) | **POST** /api/login-keys/urls | Create login URL
*MaintenanceApi* | [**apiMaintenanceGet**](docs/Api/MaintenanceApi.md#apimaintenanceget) | **GET** /api/maintenance | List maintenance tasks
*MaintenanceApi* | [**apiMaintenanceTaskCheckPost**](docs/Api/MaintenanceApi.md#apimaintenancetaskcheckpost) | **POST** /api/maintenance/{task}/check | run task checks
*MaintenanceApi* | [**apiMaintenanceTaskFixPost**](docs/Api/MaintenanceApi.md#apimaintenancetaskfixpost) | **POST** /api/maintenance/{task}/fix | run task automatic fix action
*MessagesApi* | [**apiMessagesGet**](docs/Api/MessagesApi.md#apimessagesget) | **GET** /api/messages | Get messages list
*MigrateApi* | [**apiChangeUserCreatorPost**](docs/Api/MigrateApi.md#apichangeusercreatorpost) | **POST** /api/change-user-creator | Change user creator (move user between resellers)
*MigrateApi* | [**apiConvertResellerToUserPost**](docs/Api/MigrateApi.md#apiconvertresellertouserpost) | **POST** /api/convert-reseller-to-user | Change reseller to user type.
*MigrateApi* | [**apiConvertUserToResellerPost**](docs/Api/MigrateApi.md#apiconvertusertoresellerpost) | **POST** /api/convert-user-to-reseller | Change user to reseller type.
*MiscApi* | [**apiRestartPost**](docs/Api/MiscApi.md#apirestartpost) | **POST** /api/restart | Restart Directadmin
*ModsecurityApi* | [**apiModsecurityAuditLogEntryGet**](docs/Api/ModsecurityApi.md#apimodsecurityauditlogentryget) | **GET** /api/modsecurity-audit-log/entry | get unparsed log entry with the given refence
*ModsecurityApi* | [**apiModsecurityAuditLogSummaryGet**](docs/Api/ModsecurityApi.md#apimodsecurityauditlogsummaryget) | **GET** /api/modsecurity-audit-log/summary | Read and parse modsecurity audit log
*PasswordApi* | [**apiChangePasswordPost**](docs/Api/PasswordApi.md#apichangepasswordpost) | **POST** /api/change-password | Change password
*RedisApi* | [**apiRedisDisablePost**](docs/Api/RedisApi.md#apiredisdisablepost) | **POST** /api/redis/disable | Disable/Stop Redis
*RedisApi* | [**apiRedisEnablePost**](docs/Api/RedisApi.md#apiredisenablepost) | **POST** /api/redis/enable | Enable/Start Redis
*RedisApi* | [**apiRedisStatusGet**](docs/Api/RedisApi.md#apiredisstatusget) | **GET** /api/redis/status | Get Redis status
*ResellersApi* | [**apiResellersUsernameConfigGet**](docs/Api/ResellersApi.md#apiresellersusernameconfigget) | **GET** /api/resellers/{username}/config | Get reseller config
*ResellersApi* | [**apiResellersUsernameUsageGet**](docs/Api/ResellersApi.md#apiresellersusernameusageget) | **GET** /api/resellers/{username}/usage | Get reseller and his users usage
*SecurityTxtApi* | [**apiSecurityTxtStatusGet**](docs/Api/SecurityTxtApi.md#apisecuritytxtstatusget) | **GET** /api/security-txt/status | Check security.txt
*SessionControlApi* | [**apiLoginPost**](docs/Api/SessionControlApi.md#apiloginpost) | **POST** /api/login | Create Login session
*SessionControlApi* | [**apiLoginUrlGet**](docs/Api/SessionControlApi.md#apiloginurlget) | **GET** /api/login/url | Create Login session using OTP
*SessionControlApi* | [**apiLogoutPost**](docs/Api/SessionControlApi.md#apilogoutpost) | **POST** /api/logout | Create Login session
*SessionControlApi* | [**apiSessionLoginAsReturnPost**](docs/Api/SessionControlApi.md#apisessionloginasreturnpost) | **POST** /api/session/login-as/return | Drop out of Login-as session
*SessionControlApi* | [**apiSessionLoginAsSwitchPost**](docs/Api/SessionControlApi.md#apisessionloginasswitchpost) | **POST** /api/session/login-as/switch | Swich to a new session that impersonating another account
*SessionsApi* | [**apiSessionGet**](docs/Api/SessionsApi.md#apisessionget) | **GET** /api/session | Get current session info
*SessionsApi* | [**apiSessionResellerConfigGet**](docs/Api/SessionsApi.md#apisessionresellerconfigget) | **GET** /api/session/reseller-config | Get reseller config
*SessionsApi* | [**apiSessionStateGet**](docs/Api/SessionsApi.md#apisessionstateget) | **GET** /api/session/state | Get server state
*SessionsApi* | [**apiSessionSwitchActiveDomainPost**](docs/Api/SessionsApi.md#apisessionswitchactivedomainpost) | **POST** /api/session/switch-active-domain | Switch active domain for current session
*SessionsApi* | [**apiSessionUserConfigGet**](docs/Api/SessionsApi.md#apisessionuserconfigget) | **GET** /api/session/user-config | Current user config
*SessionsApi* | [**apiSessionUserUsageGet**](docs/Api/SessionsApi.md#apisessionuserusageget) | **GET** /api/session/user-usage | Get user&#39;s usage
*SessionsApi* | [**apiSessionsDestroyAllOtherPost**](docs/Api/SessionsApi.md#apisessionsdestroyallotherpost) | **POST** /api/sessions/destroy-all-other | Destroy all active sessions except current
*SessionsApi* | [**apiSessionsDestroyPublicIdPost**](docs/Api/SessionsApi.md#apisessionsdestroypublicidpost) | **POST** /api/sessions/destroy/{public_id} | Destroy an active session
*SessionsApi* | [**apiSessionsGet**](docs/Api/SessionsApi.md#apisessionsget) | **GET** /api/sessions | List active user sessions
*SkinCustomizationApi* | [**apiSessionSkinCustomizationSkinFilenameGet**](docs/Api/SkinCustomizationApi.md#apisessionskincustomizationskinfilenameget) | **GET** /api/session/skin-customization/{skin}/{filename} | Download active skin customization file
*SkinCustomizationApi* | [**apiSessionSkinCustomizationSkinGet**](docs/Api/SkinCustomizationApi.md#apisessionskincustomizationskinget) | **GET** /api/session/skin-customization/{skin} | Get list of active skin customizations
*SkinCustomizationApi* | [**apiSkinCustomizationSkinCreatorFilenameGet**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskincreatorfilenameget) | **GET** /api/skin-customization/{skin}/creator/{filename} | Download creator&#39;s skin customization file
*SkinCustomizationApi* | [**apiSkinCustomizationSkinCreatorGet**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskincreatorget) | **GET** /api/skin-customization/{skin}/creator | Get list of creator&#39;s skin customizations
*SkinCustomizationApi* | [**apiSkinCustomizationSkinLocalDelete**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskinlocaldelete) | **DELETE** /api/skin-customization/{skin}/local | Delete all skin customization files
*SkinCustomizationApi* | [**apiSkinCustomizationSkinLocalFilenameDelete**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskinlocalfilenamedelete) | **DELETE** /api/skin-customization/{skin}/local/{filename} | Delete skin customization file
*SkinCustomizationApi* | [**apiSkinCustomizationSkinLocalFilenameGet**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskinlocalfilenameget) | **GET** /api/skin-customization/{skin}/local/{filename} | Download my skin customization file
*SkinCustomizationApi* | [**apiSkinCustomizationSkinLocalFilenamePut**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskinlocalfilenameput) | **PUT** /api/skin-customization/{skin}/local/{filename} | Upload skin customization file (overwrites if exists)
*SkinCustomizationApi* | [**apiSkinCustomizationSkinLocalGet**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskinlocalget) | **GET** /api/skin-customization/{skin}/local | Get list of my skin customizations
*SkinCustomizationApi* | [**apiSkinCustomizationSkinLocalPost**](docs/Api/SkinCustomizationApi.md#apiskincustomizationskinlocalpost) | **POST** /api/skin-customization/{skin}/local | Upload skin customization file (overwrites if exists)
*SkinOptionsApi* | [**apiSkinGlobalOptionsSkinDelete**](docs/Api/SkinOptionsApi.md#apiskinglobaloptionsskindelete) | **DELETE** /api/skin-global-options/{skin} | Delete skin global options
*SkinOptionsApi* | [**apiSkinGlobalOptionsSkinGet**](docs/Api/SkinOptionsApi.md#apiskinglobaloptionsskinget) | **GET** /api/skin-global-options/{skin} | Get skin global options
*SkinOptionsApi* | [**apiSkinGlobalOptionsSkinPatch**](docs/Api/SkinOptionsApi.md#apiskinglobaloptionsskinpatch) | **PATCH** /api/skin-global-options/{skin} | Patch skin global options
*SkinOptionsApi* | [**apiSkinGlobalOptionsSkinPut**](docs/Api/SkinOptionsApi.md#apiskinglobaloptionsskinput) | **PUT** /api/skin-global-options/{skin} | Update skin global options
*SkinOptionsApi* | [**apiSkinOptionsSkinDelete**](docs/Api/SkinOptionsApi.md#apiskinoptionsskindelete) | **DELETE** /api/skin-options/{skin} | Delete skin user options
*SkinOptionsApi* | [**apiSkinOptionsSkinGet**](docs/Api/SkinOptionsApi.md#apiskinoptionsskinget) | **GET** /api/skin-options/{skin} | Get skin user options
*SkinOptionsApi* | [**apiSkinOptionsSkinPatch**](docs/Api/SkinOptionsApi.md#apiskinoptionsskinpatch) | **PATCH** /api/skin-options/{skin} | Patch skin user options
*SkinOptionsApi* | [**apiSkinOptionsSkinPut**](docs/Api/SkinOptionsApi.md#apiskinoptionsskinput) | **PUT** /api/skin-options/{skin} | Update skin user options
*SkinTranslationsApi* | [**apiSkinTranslationSkinLangGet**](docs/Api/SkinTranslationsApi.md#apiskintranslationskinlangget) | **GET** /api/skin-translation/{skin}/{lang} | Skin translations by a language code
*TLSApi* | [**apiServerTlsAcmeConfigGet**](docs/Api/TLSApi.md#apiservertlsacmeconfigget) | **GET** /api/server-tls/acme-config | Get main server&#39;s TLS ACME configuration
*TLSApi* | [**apiServerTlsAcmeConfigPut**](docs/Api/TLSApi.md#apiservertlsacmeconfigput) | **PUT** /api/server-tls/acme-config | Set main server&#39;s TLS ACME configuration
*TLSApi* | [**apiServerTlsCertificateGet**](docs/Api/TLSApi.md#apiservertlscertificateget) | **GET** /api/server-tls/certificate | Get main server&#39;s TLS certificate
*TLSApi* | [**apiServerTlsEnablePost**](docs/Api/TLSApi.md#apiservertlsenablepost) | **POST** /api/server-tls/enable | Enable SSL for main server
*TLSApi* | [**apiServerTlsFilesGet**](docs/Api/TLSApi.md#apiservertlsfilesget) | **GET** /api/server-tls/files | Retrieve server TLS certificates
*TLSApi* | [**apiServerTlsFilesPut**](docs/Api/TLSApi.md#apiservertlsfilesput) | **PUT** /api/server-tls/files | Replace server TLS certificates
*TLSApi* | [**apiServerTlsObtainPost**](docs/Api/TLSApi.md#apiservertlsobtainpost) | **POST** /api/server-tls/obtain | Queues action to force obtain TLS certificate for main server
*TLSApi* | [**apiServerTlsStatusGet**](docs/Api/TLSApi.md#apiservertlsstatusget) | **GET** /api/server-tls/status | Get main server&#39;s TLS certificate status
*TicketsApi* | [**apiTicketRequestsGet**](docs/Api/TicketsApi.md#apiticketrequestsget) | **GET** /api/ticket-requests | Get ticket requests list
*TicketsApi* | [**apiTicketsGet**](docs/Api/TicketsApi.md#apiticketsget) | **GET** /api/tickets | Get received tickets list
*UserSearchApi* | [**apiSessionLoginAsUserListGet**](docs/Api/UserSearchApi.md#apisessionloginasuserlistget) | **GET** /api/session/login-as/user-list | Search for users when in login-as session
*UsersApi* | [**apiLoginHistoryGet**](docs/Api/UsersApi.md#apiloginhistoryget) | **GET** /api/login-history | Get login history
*UsersApi* | [**apiUsersUsernameConfigGet**](docs/Api/UsersApi.md#apiusersusernameconfigget) | **GET** /api/users/{username}/config | Get user config
*UsersApi* | [**apiUsersUsernameLoginHistoryGet**](docs/Api/UsersApi.md#apiusersusernameloginhistoryget) | **GET** /api/users/{username}/login-history | Get user&#39;s login history
*UsersApi* | [**apiUsersUsernameUsageGet**](docs/Api/UsersApi.md#apiusersusernameusageget) | **GET** /api/users/{username}/usage | Get user&#39;s usage
*VacationApi* | [**apiEmailvacationDomainGet**](docs/Api/VacationApi.md#apiemailvacationdomainget) | **GET** /api/emailvacation/{domain} | List vacation schedules for all mail users in domain
*VacationApi* | [**apiEmailvacationDomainUserDelete**](docs/Api/VacationApi.md#apiemailvacationdomainuserdelete) | **DELETE** /api/emailvacation/{domain}/{user} | delete vacation configuration for user.
*VacationApi* | [**apiEmailvacationDomainUserGet**](docs/Api/VacationApi.md#apiemailvacationdomainuserget) | **GET** /api/emailvacation/{domain}/{user} | List detailed vacation configuration for user.
*VacationApi* | [**apiEmailvacationDomainUserPut**](docs/Api/VacationApi.md#apiemailvacationdomainuserput) | **PUT** /api/emailvacation/{domain}/{user} | create or modify vacation configuration for user.
*VersioningApi* | [**apiVersionGet**](docs/Api/VersioningApi.md#apiversionget) | **GET** /api/version | Get versions info
*VersioningApi* | [**apiVersionPatch**](docs/Api/VersioningApi.md#apiversionpatch) | **PATCH** /api/version | Change update channel
*VersioningApi* | [**apiVersionUpdatePost**](docs/Api/VersioningApi.md#apiversionupdatepost) | **POST** /api/version/update | Update Directadmin
*WordPressApi* | [**apiWordpressInstallPost**](docs/Api/WordPressApi.md#apiwordpressinstallpost) | **POST** /api/wordpress/install | Performs new wordpress installation in a given location
*WordPressApi* | [**apiWordpressInstallQuickPost**](docs/Api/WordPressApi.md#apiwordpressinstallquickpost) | **POST** /api/wordpress/install-quick | Performs quick new wordpress installation in a given location
*WordPressApi* | [**apiWordpressLocationsGet**](docs/Api/WordPressApi.md#apiwordpresslocationsget) | **GET** /api/wordpress/locations | Returns list of known wordpress installations and potential installation locations.
*WordPressApi* | [**apiWordpressLocationsLocationIdConfigAutoUpdatePut**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidconfigautoupdateput) | **PUT** /api/wordpress/locations/{location_id}/config/auto-update | Change wordpress core auto update state.
*WordPressApi* | [**apiWordpressLocationsLocationIdConfigGet**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidconfigget) | **GET** /api/wordpress/locations/{location_id}/config | Retrieve wordpress database configuration for a single installation.
*WordPressApi* | [**apiWordpressLocationsLocationIdConfigPut**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidconfigput) | **PUT** /api/wordpress/locations/{location_id}/config | Change wordpress database configuration for a single installation.
*WordPressApi* | [**apiWordpressLocationsLocationIdDelete**](docs/Api/WordPressApi.md#apiwordpresslocationslocationiddelete) | **DELETE** /api/wordpress/locations/{location_id} | Remove wordpress installation.
*WordPressApi* | [**apiWordpressLocationsLocationIdOptionsGet**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidoptionsget) | **GET** /api/wordpress/locations/{location_id}/options | Retrieve all wordpress options for a single installation.
*WordPressApi* | [**apiWordpressLocationsLocationIdOptionsPatch**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidoptionspatch) | **PATCH** /api/wordpress/locations/{location_id}/options | Change wordpress options for a given installation.
*WordPressApi* | [**apiWordpressLocationsLocationIdUsersGet**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidusersget) | **GET** /api/wordpress/locations/{location_id}/users | Retrieve all wordpress user accounts
*WordPressApi* | [**apiWordpressLocationsLocationIdUsersUserIdChangePasswordPost**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidusersuseridchangepasswordpost) | **POST** /api/wordpress/locations/{location_id}/users/{user_id}/change-password | Change wordpress user account password
*WordPressApi* | [**apiWordpressLocationsLocationIdUsersUserIdSsoLoginPost**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidusersuseridssologinpost) | **POST** /api/wordpress/locations/{location_id}/users/{user_id}/sso-login | Create magic login URL.
*WordPressApi* | [**apiWordpressLocationsLocationIdWordpressGet**](docs/Api/WordPressApi.md#apiwordpresslocationslocationidwordpressget) | **GET** /api/wordpress/locations/{location_id}/wordpress | Retrieve information about a single WordPress installation
*XtermApi* | [**apiTerminalGet**](docs/Api/XtermApi.md#apiterminalget) | **GET** /api/terminal | WebSocket endpoint to start new web terminal session

## Models

- [ApierrorAccessDenied](docs/Model/ApierrorAccessDenied.md)
- [ApierrorAccountNotFound](docs/Model/ApierrorAccountNotFound.md)
- [ApierrorAccountRoleMismatch](docs/Model/ApierrorAccountRoleMismatch.md)
- [ApierrorAlreadyExists](docs/Model/ApierrorAlreadyExists.md)
- [ApierrorBadRequest](docs/Model/ApierrorBadRequest.md)
- [ApierrorCBOptionInvalidValue](docs/Model/ApierrorCBOptionInvalidValue.md)
- [ApierrorChpasswdBadCurrentPassword](docs/Model/ApierrorChpasswdBadCurrentPassword.md)
- [ApierrorClamAVPathNotFound](docs/Model/ApierrorClamAVPathNotFound.md)
- [ApierrorClamAVProcessNotFound](docs/Model/ApierrorClamAVProcessNotFound.md)
- [ApierrorClamAVScanLimitError](docs/Model/ApierrorClamAVScanLimitError.md)
- [ApierrorCpanelImportSSHAuthFailed](docs/Model/ApierrorCpanelImportSSHAuthFailed.md)
- [ApierrorCpanelImportSSHConnectionFailed](docs/Model/ApierrorCpanelImportSSHConnectionFailed.md)
- [ApierrorCpanelImportSSHNotCpanelServer](docs/Model/ApierrorCpanelImportSSHNotCpanelServer.md)
- [ApierrorCpanelImportTaskAlreadyStarted](docs/Model/ApierrorCpanelImportTaskAlreadyStarted.md)
- [ApierrorDatabaseClone](docs/Model/ApierrorDatabaseClone.md)
- [ApierrorDatabaseImport](docs/Model/ApierrorDatabaseImport.md)
- [ApierrorDatabaseInvalidCharset](docs/Model/ApierrorDatabaseInvalidCharset.md)
- [ApierrorDatabaseInvalidCollation](docs/Model/ApierrorDatabaseInvalidCollation.md)
- [ApierrorDatabaseInvalidEntityName](docs/Model/ApierrorDatabaseInvalidEntityName.md)
- [ApierrorDatabaseNoViableDefiner](docs/Model/ApierrorDatabaseNoViableDefiner.md)
- [ApierrorDatabaseUsersExceedLimit](docs/Model/ApierrorDatabaseUsersExceedLimit.md)
- [ApierrorDatabasesExceedLimit](docs/Model/ApierrorDatabasesExceedLimit.md)
- [ApierrorGitDeployBranchNotSet](docs/Model/ApierrorGitDeployBranchNotSet.md)
- [ApierrorGitDeployDirNotSet](docs/Model/ApierrorGitDeployDirNotSet.md)
- [ApierrorGitExecError](docs/Model/ApierrorGitExecError.md)
- [ApierrorImapsyncAuthenticationFailure](docs/Model/ApierrorImapsyncAuthenticationFailure.md)
- [ApierrorImapsyncAuthenticationFailureUserDst](docs/Model/ApierrorImapsyncAuthenticationFailureUserDst.md)
- [ApierrorImapsyncAuthenticationFailureUserSrc](docs/Model/ApierrorImapsyncAuthenticationFailureUserSrc.md)
- [ApierrorImapsyncConnectionFailure](docs/Model/ApierrorImapsyncConnectionFailure.md)
- [ApierrorImapsyncConnectionFailureHostDst](docs/Model/ApierrorImapsyncConnectionFailureHostDst.md)
- [ApierrorImapsyncConnectionFailureHostSrc](docs/Model/ApierrorImapsyncConnectionFailureHostSrc.md)
- [ApierrorImapsyncMigrationLimitError](docs/Model/ApierrorImapsyncMigrationLimitError.md)
- [ApierrorImapsyncProcessNotFound](docs/Model/ApierrorImapsyncProcessNotFound.md)
- [ApierrorInternalError](docs/Model/ApierrorInternalError.md)
- [ApierrorLicenseInvalid](docs/Model/ApierrorLicenseInvalid.md)
- [ApierrorLicenseOverused](docs/Model/ApierrorLicenseOverused.md)
- [ApierrorLicenseSessionNotConnected](docs/Model/ApierrorLicenseSessionNotConnected.md)
- [ApierrorLoginAccountDisabled](docs/Model/ApierrorLoginAccountDisabled.md)
- [ApierrorLoginFailedOTPResponse](docs/Model/ApierrorLoginFailedOTPResponse.md)
- [ApierrorLoginKeyAPIOnly](docs/Model/ApierrorLoginKeyAPIOnly.md)
- [ApierrorLoginKeyAlreadyExists](docs/Model/ApierrorLoginKeyAlreadyExists.md)
- [ApierrorLoginKeyBadCurrentPassword](docs/Model/ApierrorLoginKeyBadCurrentPassword.md)
- [ApierrorLoginKeyDuplicatePassword](docs/Model/ApierrorLoginKeyDuplicatePassword.md)
- [ApierrorLoginKeyReadOnly](docs/Model/ApierrorLoginKeyReadOnly.md)
- [ApierrorNotFound](docs/Model/ApierrorNotFound.md)
- [ApierrorPreHookError](docs/Model/ApierrorPreHookError.md)
- [ApierrorResellerExceedsLimits](docs/Model/ApierrorResellerExceedsLimits.md)
- [ApierrorTLSCertificateInvalid](docs/Model/ApierrorTLSCertificateInvalid.md)
- [ApierrorUnauthorized](docs/Model/ApierrorUnauthorized.md)
- [ApierrorWeakPassword](docs/Model/ApierrorWeakPassword.md)
- [ApierrorWordpressAlreadyInstalled](docs/Model/ApierrorWordpressAlreadyInstalled.md)
- [ApierrorWordpressDatabaseError](docs/Model/ApierrorWordpressDatabaseError.md)
- [EximlogparsingEmail](docs/Model/EximlogparsingEmail.md)
- [EximlogparsingRecipient](docs/Model/EximlogparsingRecipient.md)
- [WebAcmeConfig](docs/Model/WebAcmeConfig.md)
- [WebAdminUsage](docs/Model/WebAdminUsage.md)
- [WebAuditEntry](docs/Model/WebAuditEntry.md)
- [WebCbAction](docs/Model/WebCbAction.md)
- [WebCbCompileConfigRequest](docs/Model/WebCbCompileConfigRequest.md)
- [WebCbCompileScript](docs/Model/WebCbCompileScript.md)
- [WebCbCompileScriptMetadata](docs/Model/WebCbCompileScriptMetadata.md)
- [WebCbLogMetadata](docs/Model/WebCbLogMetadata.md)
- [WebCbOption](docs/Model/WebCbOption.md)
- [WebCbOptionFull](docs/Model/WebCbOptionFull.md)
- [WebCbOptionKV](docs/Model/WebCbOptionKV.md)
- [WebCbOptionRequest](docs/Model/WebCbOptionRequest.md)
- [WebCbOptions](docs/Model/WebCbOptions.md)
- [WebCbOptionsCategory](docs/Model/WebCbOptionsCategory.md)
- [WebCbOptionsCategoryRequest](docs/Model/WebCbOptionsCategoryRequest.md)
- [WebCbOptionsRequest](docs/Model/WebCbOptionsRequest.md)
- [WebCbOptionsValidateResponse](docs/Model/WebCbOptionsValidateResponse.md)
- [WebCbRunRequest](docs/Model/WebCbRunRequest.md)
- [WebCbRunResponse](docs/Model/WebCbRunResponse.md)
- [WebCbSoftware](docs/Model/WebCbSoftware.md)
- [WebCbSoftwareApp](docs/Model/WebCbSoftwareApp.md)
- [WebCbState](docs/Model/WebCbState.md)
- [WebCbUpdate](docs/Model/WebCbUpdate.md)
- [WebCbVersion](docs/Model/WebCbVersion.md)
- [WebCbVersionsCustomRequest](docs/Model/WebCbVersionsCustomRequest.md)
- [WebChangeUserCreatorRequest](docs/Model/WebChangeUserCreatorRequest.md)
- [WebCheckResult](docs/Model/WebCheckResult.md)
- [WebChpasswdRequest](docs/Model/WebChpasswdRequest.md)
- [WebClamAVProcess](docs/Model/WebClamAVProcess.md)
- [WebClamAVProcsResponse](docs/Model/WebClamAVProcsResponse.md)
- [WebClamAVRequest](docs/Model/WebClamAVRequest.md)
- [WebCpanelCheckRequest](docs/Model/WebCpanelCheckRequest.md)
- [WebCpanelCheckResponse](docs/Model/WebCpanelCheckResponse.md)
- [WebCpanelImportStart](docs/Model/WebCpanelImportStart.md)
- [WebCpanelImportTask](docs/Model/WebCpanelImportTask.md)
- [WebCpanelImportTaskLog](docs/Model/WebCpanelImportTaskLog.md)
- [WebCpanelRemoteUser](docs/Model/WebCpanelRemoteUser.md)
- [WebDbCloneDatabaseDestination](docs/Model/WebDbCloneDatabaseDestination.md)
- [WebDbCloneDatabaseRequest](docs/Model/WebDbCloneDatabaseRequest.md)
- [WebDbCloneDatabaseRequestSource](docs/Model/WebDbCloneDatabaseRequestSource.md)
- [WebDbCloneDatabaseResponse](docs/Model/WebDbCloneDatabaseResponse.md)
- [WebDbCreateDatabaseRequest](docs/Model/WebDbCreateDatabaseRequest.md)
- [WebDbCreateDatabaseWithUserRequest](docs/Model/WebDbCreateDatabaseWithUserRequest.md)
- [WebDbCreateUserRequest](docs/Model/WebDbCreateUserRequest.md)
- [WebDbDatabaseListEntry](docs/Model/WebDbDatabaseListEntry.md)
- [WebDbDatabaseMetadata](docs/Model/WebDbDatabaseMetadata.md)
- [WebDbDatabaseUser](docs/Model/WebDbDatabaseUser.md)
- [WebDbFullConnectionResponse](docs/Model/WebDbFullConnectionResponse.md)
- [WebDbInfoResponse](docs/Model/WebDbInfoResponse.md)
- [WebDbMonitorProcess](docs/Model/WebDbMonitorProcess.md)
- [WebDbPrivs](docs/Model/WebDbPrivs.md)
- [WebDbTableActionResult](docs/Model/WebDbTableActionResult.md)
- [WebDbUser](docs/Model/WebDbUser.md)
- [WebDbUserChangePasswordRequest](docs/Model/WebDbUserChangePasswordRequest.md)
- [WebDbUserChangePrivsRequest](docs/Model/WebDbUserChangePrivsRequest.md)
- [WebDbUserDatabase](docs/Model/WebDbUserDatabase.md)
- [WebEmailLogResponse](docs/Model/WebEmailLogResponse.md)
- [WebEmailLogsSummary](docs/Model/WebEmailLogsSummary.md)
- [WebEmailLogsSummaryStat](docs/Model/WebEmailLogsSummaryStat.md)
- [WebEmailVacation](docs/Model/WebEmailVacation.md)
- [WebEmailVacationDetail](docs/Model/WebEmailVacationDetail.md)
- [WebExecPayload](docs/Model/WebExecPayload.md)
- [WebExecResult](docs/Model/WebExecResult.md)
- [WebFixResult](docs/Model/WebFixResult.md)
- [WebFmDiskUsageResponse](docs/Model/WebFmDiskUsageResponse.md)
- [WebFmListEntry](docs/Model/WebFmListEntry.md)
- [WebFmListResponse](docs/Model/WebFmListResponse.md)
- [WebFmMetadataResponse](docs/Model/WebFmMetadataResponse.md)
- [WebFmMetadataSymlink](docs/Model/WebFmMetadataSymlink.md)
- [WebFmTreeEntry](docs/Model/WebFmTreeEntry.md)
- [WebFmTreeResponse](docs/Model/WebFmTreeResponse.md)
- [WebGitAuthor](docs/Model/WebGitAuthor.md)
- [WebGitCommit](docs/Model/WebGitCommit.md)
- [WebGitCommitInfoResult](docs/Model/WebGitCommitInfoResult.md)
- [WebGitCreateParameters](docs/Model/WebGitCreateParameters.md)
- [WebGitDiffLine](docs/Model/WebGitDiffLine.md)
- [WebGitFileDiff](docs/Model/WebGitFileDiff.md)
- [WebGitLogResult](docs/Model/WebGitLogResult.md)
- [WebGitRepositoryResult](docs/Model/WebGitRepositoryResult.md)
- [WebGitUpdateParameters](docs/Model/WebGitUpdateParameters.md)
- [WebImapsyncExportRequest](docs/Model/WebImapsyncExportRequest.md)
- [WebImapsyncImportRequest](docs/Model/WebImapsyncImportRequest.md)
- [WebImapsyncMigration](docs/Model/WebImapsyncMigration.md)
- [WebImapsyncMigrationLocation](docs/Model/WebImapsyncMigrationLocation.md)
- [WebImpersonateRequest](docs/Model/WebImpersonateRequest.md)
- [WebLicenseLimitsResponse](docs/Model/WebLicenseLimitsResponse.md)
- [WebLicenseProofResponse](docs/Model/WebLicenseProofResponse.md)
- [WebLicenseResponse](docs/Model/WebLicenseResponse.md)
- [WebLicenseUpdateRequest](docs/Model/WebLicenseUpdateRequest.md)
- [WebLocalLocation](docs/Model/WebLocalLocation.md)
- [WebLoginInfo](docs/Model/WebLoginInfo.md)
- [WebLoginKeyCommand](docs/Model/WebLoginKeyCommand.md)
- [WebLoginKeyCommandsResponse](docs/Model/WebLoginKeyCommandsResponse.md)
- [WebLoginKeyCreateRequest](docs/Model/WebLoginKeyCreateRequest.md)
- [WebLoginKeyHistoryEntry](docs/Model/WebLoginKeyHistoryEntry.md)
- [WebLoginKeyResponse](docs/Model/WebLoginKeyResponse.md)
- [WebLoginKeyUpdateRequest](docs/Model/WebLoginKeyUpdateRequest.md)
- [WebLoginLicenseInfo](docs/Model/WebLoginLicenseInfo.md)
- [WebLoginRequest](docs/Model/WebLoginRequest.md)
- [WebLoginRequestOtp](docs/Model/WebLoginRequestOtp.md)
- [WebLoginResult](docs/Model/WebLoginResult.md)
- [WebLoginURLCreateRequest](docs/Model/WebLoginURLCreateRequest.md)
- [WebLoginURLCreateResponse](docs/Model/WebLoginURLCreateResponse.md)
- [WebLoginURLResponse](docs/Model/WebLoginURLResponse.md)
- [WebLogoutResponse](docs/Model/WebLogoutResponse.md)
- [WebMaintenanceTask](docs/Model/WebMaintenanceTask.md)
- [WebMessage](docs/Model/WebMessage.md)
- [WebPhpmyadminSSOResponse](docs/Model/WebPhpmyadminSSOResponse.md)
- [WebRedisStatusResponse](docs/Model/WebRedisStatusResponse.md)
- [WebRemoteLocation](docs/Model/WebRemoteLocation.md)
- [WebResellerConfig](docs/Model/WebResellerConfig.md)
- [WebResellerToUserRequest](docs/Model/WebResellerToUserRequest.md)
- [WebResellerUsage](docs/Model/WebResellerUsage.md)
- [WebRuleData](docs/Model/WebRuleData.md)
- [WebSearchResult](docs/Model/WebSearchResult.md)
- [WebSecurityTxtStatus](docs/Model/WebSecurityTxtStatus.md)
- [WebServerTLSCertificate](docs/Model/WebServerTLSCertificate.md)
- [WebServerTLSFiles](docs/Model/WebServerTLSFiles.md)
- [WebServerTLSStatus](docs/Model/WebServerTLSStatus.md)
- [WebSessionCBOptions](docs/Model/WebSessionCBOptions.md)
- [WebSessionConfigFeatures](docs/Model/WebSessionConfigFeatures.md)
- [WebSessionCustomDomainItem](docs/Model/WebSessionCustomDomainItem.md)
- [WebSessionCustomDomainOption](docs/Model/WebSessionCustomDomainOption.md)
- [WebSessionDAConf](docs/Model/WebSessionDAConf.md)
- [WebSessionInfo](docs/Model/WebSessionInfo.md)
- [WebSessionMetadata](docs/Model/WebSessionMetadata.md)
- [WebSessionSelectDomainRequest](docs/Model/WebSessionSelectDomainRequest.md)
- [WebSkinCustomizationsFile](docs/Model/WebSkinCustomizationsFile.md)
- [WebStateResponse](docs/Model/WebStateResponse.md)
- [WebSystemInfoCPU](docs/Model/WebSystemInfoCPU.md)
- [WebSystemInfoCPUCore](docs/Model/WebSystemInfoCPUCore.md)
- [WebSystemInfoFS](docs/Model/WebSystemInfoFS.md)
- [WebSystemInfoLoad](docs/Model/WebSystemInfoLoad.md)
- [WebSystemInfoMemory](docs/Model/WebSystemInfoMemory.md)
- [WebSystemInfoRAM](docs/Model/WebSystemInfoRAM.md)
- [WebSystemInfoService](docs/Model/WebSystemInfoService.md)
- [WebSystemInfoServices](docs/Model/WebSystemInfoServices.md)
- [WebSystemInfoSwap](docs/Model/WebSystemInfoSwap.md)
- [WebSystemInfoUptime](docs/Model/WebSystemInfoUptime.md)
- [WebTicketReply](docs/Model/WebTicketReply.md)
- [WebTicketResponse](docs/Model/WebTicketResponse.md)
- [WebUpdateResponse](docs/Model/WebUpdateResponse.md)
- [WebUsageLimitAllocation](docs/Model/WebUsageLimitAllocation.md)
- [WebUsageResponse](docs/Model/WebUsageResponse.md)
- [WebUserConfig](docs/Model/WebUserConfig.md)
- [WebUserLimit](docs/Model/WebUserLimit.md)
- [WebUserLoginHistory](docs/Model/WebUserLoginHistory.md)
- [WebUserToResellerRequest](docs/Model/WebUserToResellerRequest.md)
- [WebUserUsage](docs/Model/WebUserUsage.md)
- [WebVersionRequest](docs/Model/WebVersionRequest.md)
- [WebVersionRequestUpdate](docs/Model/WebVersionRequestUpdate.md)
- [WebVersionResponse](docs/Model/WebVersionResponse.md)
- [WebWordpressConfig](docs/Model/WebWordpressConfig.md)
- [WebWordpressInstallQuickRequest](docs/Model/WebWordpressInstallQuickRequest.md)
- [WebWordpressInstallRequest](docs/Model/WebWordpressInstallRequest.md)
- [WebWordpressInstallResponse](docs/Model/WebWordpressInstallResponse.md)
- [WebWordpressInstallation](docs/Model/WebWordpressInstallation.md)
- [WebWordpressInstance](docs/Model/WebWordpressInstance.md)
- [WebWordpressSSO](docs/Model/WebWordpressSSO.md)
- [WebWordpressUpdateState](docs/Model/WebWordpressUpdateState.md)
- [WebWordpressUser](docs/Model/WebWordpressUser.md)
- [WebWordpressUserPassword](docs/Model/WebWordpressUserPassword.md)
- [WebX509Certificate](docs/Model/WebX509Certificate.md)
- [WebX509CertificateSimple](docs/Model/WebX509CertificateSimple.md)

## Authorization

Authentication schemes defined for the API:
### DaBasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@directadmin.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.14.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
