<?php
/**
 * WebLicenseResponse
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
 * WebLicenseResponse Class Doc Comment
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebLicenseResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'web.licenseResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expires' => '\DateTime',
        'lid' => 'int',
        'limits' => '\COMPITAUT\DirectAdminAPI\Model\WebLicenseLimitsResponse',
        'name' => 'string',
        'pid' => 'int',
        'type' => 'string',
        'uid' => 'int',
        'usage' => '\COMPITAUT\DirectAdminAPI\Model\WebUsageResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expires' => 'date-time',
        'lid' => null,
        'limits' => null,
        'name' => null,
        'pid' => null,
        'type' => null,
        'uid' => null,
        'usage' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'expires' => false,
        'lid' => false,
        'limits' => false,
        'name' => false,
        'pid' => false,
        'type' => false,
        'uid' => false,
        'usage' => false
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
        'expires' => 'expires',
        'lid' => 'lid',
        'limits' => 'limits',
        'name' => 'name',
        'pid' => 'pid',
        'type' => 'type',
        'uid' => 'uid',
        'usage' => 'usage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expires' => 'setExpires',
        'lid' => 'setLid',
        'limits' => 'setLimits',
        'name' => 'setName',
        'pid' => 'setPid',
        'type' => 'setType',
        'uid' => 'setUid',
        'usage' => 'setUsage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expires' => 'getExpires',
        'lid' => 'getLid',
        'limits' => 'getLimits',
        'name' => 'getName',
        'pid' => 'getPid',
        'type' => 'getType',
        'uid' => 'getUid',
        'usage' => 'getUsage'
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
        $this->setIfExists('expires', $data ?? [], null);
        $this->setIfExists('lid', $data ?? [], null);
        $this->setIfExists('limits', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('pid', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('uid', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
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

        if ($this->container['expires'] === null) {
            $invalidProperties[] = "'expires' can't be null";
        }
        if ($this->container['lid'] === null) {
            $invalidProperties[] = "'lid' can't be null";
        }
        if ($this->container['limits'] === null) {
            $invalidProperties[] = "'limits' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['pid'] === null) {
            $invalidProperties[] = "'pid' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
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
     * Gets expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param \DateTime $expires Time when license will become expired if not renewed.
     *
     * @return self
     */
    public function setExpires($expires)
    {
        if (is_null($expires)) {
            throw new \InvalidArgumentException('non-nullable expires cannot be null');
        }
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets lid
     *
     * @return int
     */
    public function getLid()
    {
        return $this->container['lid'];
    }

    /**
     * Sets lid
     *
     * @param int $lid License ID.
     *
     * @return self
     */
    public function setLid($lid)
    {
        if (is_null($lid)) {
            throw new \InvalidArgumentException('non-nullable lid cannot be null');
        }
        $this->container['lid'] = $lid;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \COMPITAUT\DirectAdminAPI\Model\WebLicenseLimitsResponse
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \COMPITAUT\DirectAdminAPI\Model\WebLicenseLimitsResponse $limits limits
     *
     * @return self
     */
    public function setLimits($limits)
    {
        if (is_null($limits)) {
            throw new \InvalidArgumentException('non-nullable limits cannot be null');
        }
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name License name assigned in the clients area.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return int
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param int $pid Product (license type) ID.
     *
     * @return self
     */
    public function setPid($pid)
    {
        if (is_null($pid)) {
            throw new \InvalidArgumentException('non-nullable pid cannot be null');
        }
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Textual description of product (license type).
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int $uid User (license owner) ID.
     *
     * @return self
     */
    public function setUid($uid)
    {
        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return \COMPITAUT\DirectAdminAPI\Model\WebUsageResponse
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param \COMPITAUT\DirectAdminAPI\Model\WebUsageResponse $usage usage
     *
     * @return self
     */
    public function setUsage($usage)
    {
        if (is_null($usage)) {
            throw new \InvalidArgumentException('non-nullable usage cannot be null');
        }
        $this->container['usage'] = $usage;

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


