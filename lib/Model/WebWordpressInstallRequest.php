<?php
/**
 * WebWordpressInstallRequest
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Swagger DirectAdmin API
 *
 * Swagger API for DirectAdmin server
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@directadmin.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace COMPITAUT\DirectAdminAPI\Model;

use \ArrayAccess;
use \COMPITAUT\DirectAdminAPI\ObjectSerializer;

/**
 * WebWordpressInstallRequest Class Doc Comment
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebWordpressInstallRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'web.wordpressInstallRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adminEmail' => 'string',
        'adminName' => 'string',
        'adminPass' => 'string',
        'dbName' => 'string',
        'dbPass' => 'string',
        'dbPrefix' => 'string',
        'dbUser' => 'string',
        'filePath' => 'string',
        'siteURL' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adminEmail' => null,
        'adminName' => null,
        'adminPass' => null,
        'dbName' => null,
        'dbPass' => null,
        'dbPrefix' => null,
        'dbUser' => null,
        'filePath' => null,
        'siteURL' => null,
        'title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'adminEmail' => false,
        'adminName' => false,
        'adminPass' => false,
        'dbName' => false,
        'dbPass' => false,
        'dbPrefix' => false,
        'dbUser' => false,
        'filePath' => false,
        'siteURL' => false,
        'title' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'adminEmail' => 'adminEmail',
        'adminName' => 'adminName',
        'adminPass' => 'adminPass',
        'dbName' => 'dbName',
        'dbPass' => 'dbPass',
        'dbPrefix' => 'dbPrefix',
        'dbUser' => 'dbUser',
        'filePath' => 'filePath',
        'siteURL' => 'siteURL',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adminEmail' => 'setAdminEmail',
        'adminName' => 'setAdminName',
        'adminPass' => 'setAdminPass',
        'dbName' => 'setDbName',
        'dbPass' => 'setDbPass',
        'dbPrefix' => 'setDbPrefix',
        'dbUser' => 'setDbUser',
        'filePath' => 'setFilePath',
        'siteURL' => 'setSiteURL',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adminEmail' => 'getAdminEmail',
        'adminName' => 'getAdminName',
        'adminPass' => 'getAdminPass',
        'dbName' => 'getDbName',
        'dbPass' => 'getDbPass',
        'dbPrefix' => 'getDbPrefix',
        'dbUser' => 'getDbUser',
        'filePath' => 'getFilePath',
        'siteURL' => 'getSiteURL',
        'title' => 'getTitle'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('adminEmail', $data ?? [], null);
        $this->setIfExists('adminName', $data ?? [], null);
        $this->setIfExists('adminPass', $data ?? [], null);
        $this->setIfExists('dbName', $data ?? [], null);
        $this->setIfExists('dbPass', $data ?? [], null);
        $this->setIfExists('dbPrefix', $data ?? [], null);
        $this->setIfExists('dbUser', $data ?? [], null);
        $this->setIfExists('filePath', $data ?? [], null);
        $this->setIfExists('siteURL', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['adminEmail'] === null) {
            $invalidProperties[] = "'adminEmail' can't be null";
        }
        if ($this->container['adminName'] === null) {
            $invalidProperties[] = "'adminName' can't be null";
        }
        if ($this->container['adminPass'] === null) {
            $invalidProperties[] = "'adminPass' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['dbPass'] === null) {
            $invalidProperties[] = "'dbPass' can't be null";
        }
        if ($this->container['dbPrefix'] === null) {
            $invalidProperties[] = "'dbPrefix' can't be null";
        }
        if ($this->container['dbUser'] === null) {
            $invalidProperties[] = "'dbUser' can't be null";
        }
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets adminEmail
     *
     * @return string
     */
    public function getAdminEmail()
    {
        return $this->container['adminEmail'];
    }

    /**
     * Sets adminEmail
     *
     * @param string $adminEmail adminEmail
     *
     * @return self
     */
    public function setAdminEmail($adminEmail)
    {
        if (is_null($adminEmail)) {
            throw new \InvalidArgumentException('non-nullable adminEmail cannot be null');
        }
        $this->container['adminEmail'] = $adminEmail;

        return $this;
    }

    /**
     * Gets adminName
     *
     * @return string
     */
    public function getAdminName()
    {
        return $this->container['adminName'];
    }

    /**
     * Sets adminName
     *
     * @param string $adminName adminName
     *
     * @return self
     */
    public function setAdminName($adminName)
    {
        if (is_null($adminName)) {
            throw new \InvalidArgumentException('non-nullable adminName cannot be null');
        }
        $this->container['adminName'] = $adminName;

        return $this;
    }

    /**
     * Gets adminPass
     *
     * @return string
     */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
     * Sets adminPass
     *
     * @param string $adminPass adminPass
     *
     * @return self
     */
    public function setAdminPass($adminPass)
    {
        if (is_null($adminPass)) {
            throw new \InvalidArgumentException('non-nullable adminPass cannot be null');
        }
        $this->container['adminPass'] = $adminPass;

        return $this;
    }

    /**
     * Gets dbName
     *
     * @return string
     */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
     * Sets dbName
     *
     * @param string $dbName dbName
     *
     * @return self
     */
    public function setDbName($dbName)
    {
        if (is_null($dbName)) {
            throw new \InvalidArgumentException('non-nullable dbName cannot be null');
        }
        $this->container['dbName'] = $dbName;

        return $this;
    }

    /**
     * Gets dbPass
     *
     * @return string
     */
    public function getDbPass()
    {
        return $this->container['dbPass'];
    }

    /**
     * Sets dbPass
     *
     * @param string $dbPass dbPass
     *
     * @return self
     */
    public function setDbPass($dbPass)
    {
        if (is_null($dbPass)) {
            throw new \InvalidArgumentException('non-nullable dbPass cannot be null');
        }
        $this->container['dbPass'] = $dbPass;

        return $this;
    }

    /**
     * Gets dbPrefix
     *
     * @return string
     */
    public function getDbPrefix()
    {
        return $this->container['dbPrefix'];
    }

    /**
     * Sets dbPrefix
     *
     * @param string $dbPrefix dbPrefix
     *
     * @return self
     */
    public function setDbPrefix($dbPrefix)
    {
        if (is_null($dbPrefix)) {
            throw new \InvalidArgumentException('non-nullable dbPrefix cannot be null');
        }
        $this->container['dbPrefix'] = $dbPrefix;

        return $this;
    }

    /**
     * Gets dbUser
     *
     * @return string
     */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
     * Sets dbUser
     *
     * @param string $dbUser dbUser
     *
     * @return self
     */
    public function setDbUser($dbUser)
    {
        if (is_null($dbUser)) {
            throw new \InvalidArgumentException('non-nullable dbUser cannot be null');
        }
        $this->container['dbUser'] = $dbUser;

        return $this;
    }

    /**
     * Gets filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
     * Sets filePath
     *
     * @param string $filePath filePath
     *
     * @return self
     */
    public function setFilePath($filePath)
    {
        if (is_null($filePath)) {
            throw new \InvalidArgumentException('non-nullable filePath cannot be null');
        }
        $this->container['filePath'] = $filePath;

        return $this;
    }

    /**
     * Gets siteURL
     *
     * @return string|null
     */
    public function getSiteURL()
    {
        return $this->container['siteURL'];
    }

    /**
     * Sets siteURL
     *
     * @param string|null $siteURL siteURL
     *
     * @return self
     */
    public function setSiteURL($siteURL)
    {
        if (is_null($siteURL)) {
            throw new \InvalidArgumentException('non-nullable siteURL cannot be null');
        }
        $this->container['siteURL'] = $siteURL;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


