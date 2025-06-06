<?php
/**
 * WebCpanelCheckRequest
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
 * WebCpanelCheckRequest Class Doc Comment
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebCpanelCheckRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'web.cpanelCheckRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'remoteHost' => 'string',
        'remotePassword' => 'string',
        'remotePort' => 'int',
        'remoteUser' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'remoteHost' => null,
        'remotePassword' => null,
        'remotePort' => null,
        'remoteUser' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'remoteHost' => false,
        'remotePassword' => false,
        'remotePort' => false,
        'remoteUser' => false
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
        'remoteHost' => 'remoteHost',
        'remotePassword' => 'remotePassword',
        'remotePort' => 'remotePort',
        'remoteUser' => 'remoteUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remoteHost' => 'setRemoteHost',
        'remotePassword' => 'setRemotePassword',
        'remotePort' => 'setRemotePort',
        'remoteUser' => 'setRemoteUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remoteHost' => 'getRemoteHost',
        'remotePassword' => 'getRemotePassword',
        'remotePort' => 'getRemotePort',
        'remoteUser' => 'getRemoteUser'
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
        $this->setIfExists('remoteHost', $data ?? [], null);
        $this->setIfExists('remotePassword', $data ?? [], null);
        $this->setIfExists('remotePort', $data ?? [], null);
        $this->setIfExists('remoteUser', $data ?? [], null);
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

        if ($this->container['remoteHost'] === null) {
            $invalidProperties[] = "'remoteHost' can't be null";
        }
        if ($this->container['remotePassword'] === null) {
            $invalidProperties[] = "'remotePassword' can't be null";
        }
        if ($this->container['remotePort'] === null) {
            $invalidProperties[] = "'remotePort' can't be null";
        }
        if ($this->container['remoteUser'] === null) {
            $invalidProperties[] = "'remoteUser' can't be null";
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
     * Gets remoteHost
     *
     * @return string
     */
    public function getRemoteHost()
    {
        return $this->container['remoteHost'];
    }

    /**
     * Sets remoteHost
     *
     * @param string $remoteHost cpanel server hostname
     *
     * @return self
     */
    public function setRemoteHost($remoteHost)
    {
        if (is_null($remoteHost)) {
            throw new \InvalidArgumentException('non-nullable remoteHost cannot be null');
        }
        $this->container['remoteHost'] = $remoteHost;

        return $this;
    }

    /**
     * Gets remotePassword
     *
     * @return string
     */
    public function getRemotePassword()
    {
        return $this->container['remotePassword'];
    }

    /**
     * Sets remotePassword
     *
     * @param string $remotePassword cpanel server SSH user password
     *
     * @return self
     */
    public function setRemotePassword($remotePassword)
    {
        if (is_null($remotePassword)) {
            throw new \InvalidArgumentException('non-nullable remotePassword cannot be null');
        }
        $this->container['remotePassword'] = $remotePassword;

        return $this;
    }

    /**
     * Gets remotePort
     *
     * @return int
     */
    public function getRemotePort()
    {
        return $this->container['remotePort'];
    }

    /**
     * Sets remotePort
     *
     * @param int $remotePort cpanel server SSH port
     *
     * @return self
     */
    public function setRemotePort($remotePort)
    {
        if (is_null($remotePort)) {
            throw new \InvalidArgumentException('non-nullable remotePort cannot be null');
        }
        $this->container['remotePort'] = $remotePort;

        return $this;
    }

    /**
     * Gets remoteUser
     *
     * @return string
     */
    public function getRemoteUser()
    {
        return $this->container['remoteUser'];
    }

    /**
     * Sets remoteUser
     *
     * @param string $remoteUser cpanel server SSH user name
     *
     * @return self
     */
    public function setRemoteUser($remoteUser)
    {
        if (is_null($remoteUser)) {
            throw new \InvalidArgumentException('non-nullable remoteUser cannot be null');
        }
        $this->container['remoteUser'] = $remoteUser;

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


