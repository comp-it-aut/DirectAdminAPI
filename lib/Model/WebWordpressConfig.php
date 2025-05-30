<?php
/**
 * WebWordpressConfig
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
 * WebWordpressConfig Class Doc Comment
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebWordpressConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'web.wordpressConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dbHost' => 'string',
        'dbName' => 'string',
        'dbPass' => 'string',
        'dbPrefix' => 'string',
        'dbUser' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dbHost' => null,
        'dbName' => null,
        'dbPass' => null,
        'dbPrefix' => null,
        'dbUser' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dbHost' => false,
        'dbName' => false,
        'dbPass' => false,
        'dbPrefix' => false,
        'dbUser' => false
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
        'dbHost' => 'dbHost',
        'dbName' => 'dbName',
        'dbPass' => 'dbPass',
        'dbPrefix' => 'dbPrefix',
        'dbUser' => 'dbUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dbHost' => 'setDbHost',
        'dbName' => 'setDbName',
        'dbPass' => 'setDbPass',
        'dbPrefix' => 'setDbPrefix',
        'dbUser' => 'setDbUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dbHost' => 'getDbHost',
        'dbName' => 'getDbName',
        'dbPass' => 'getDbPass',
        'dbPrefix' => 'getDbPrefix',
        'dbUser' => 'getDbUser'
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
        $this->setIfExists('dbHost', $data ?? [], null);
        $this->setIfExists('dbName', $data ?? [], null);
        $this->setIfExists('dbPass', $data ?? [], null);
        $this->setIfExists('dbPrefix', $data ?? [], null);
        $this->setIfExists('dbUser', $data ?? [], null);
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

        if ($this->container['dbHost'] === null) {
            $invalidProperties[] = "'dbHost' can't be null";
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
     * Gets dbHost
     *
     * @return string
     */
    public function getDbHost()
    {
        return $this->container['dbHost'];
    }

    /**
     * Sets dbHost
     *
     * @param string $dbHost dbHost
     *
     * @return self
     */
    public function setDbHost($dbHost)
    {
        if (is_null($dbHost)) {
            throw new \InvalidArgumentException('non-nullable dbHost cannot be null');
        }
        $this->container['dbHost'] = $dbHost;

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


