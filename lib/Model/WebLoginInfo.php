<?php
/**
 * WebLoginInfo
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
 * WebLoginInfo Class Doc Comment
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebLoginInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'web.loginInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'oTPTrustDays' => 'int',
        'allowPasswordReset' => 'bool',
        'hostname' => 'string',
        'languages' => 'string[]',
        'license' => '\COMPITAUT\DirectAdminAPI\Model\WebLoginLicenseInfo',
        'time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'oTPTrustDays' => null,
        'allowPasswordReset' => null,
        'hostname' => null,
        'languages' => null,
        'license' => null,
        'time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'oTPTrustDays' => false,
        'allowPasswordReset' => false,
        'hostname' => false,
        'languages' => false,
        'license' => false,
        'time' => false
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
        'oTPTrustDays' => 'OTPTrustDays',
        'allowPasswordReset' => 'allowPasswordReset',
        'hostname' => 'hostname',
        'languages' => 'languages',
        'license' => 'license',
        'time' => 'time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oTPTrustDays' => 'setOTPTrustDays',
        'allowPasswordReset' => 'setAllowPasswordReset',
        'hostname' => 'setHostname',
        'languages' => 'setLanguages',
        'license' => 'setLicense',
        'time' => 'setTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oTPTrustDays' => 'getOTPTrustDays',
        'allowPasswordReset' => 'getAllowPasswordReset',
        'hostname' => 'getHostname',
        'languages' => 'getLanguages',
        'license' => 'getLicense',
        'time' => 'getTime'
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
        $this->setIfExists('oTPTrustDays', $data ?? [], null);
        $this->setIfExists('allowPasswordReset', $data ?? [], null);
        $this->setIfExists('hostname', $data ?? [], null);
        $this->setIfExists('languages', $data ?? [], null);
        $this->setIfExists('license', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
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

        if ($this->container['oTPTrustDays'] === null) {
            $invalidProperties[] = "'oTPTrustDays' can't be null";
        }
        if ($this->container['allowPasswordReset'] === null) {
            $invalidProperties[] = "'allowPasswordReset' can't be null";
        }
        if ($this->container['hostname'] === null) {
            $invalidProperties[] = "'hostname' can't be null";
        }
        if ($this->container['languages'] === null) {
            $invalidProperties[] = "'languages' can't be null";
        }
        if ($this->container['license'] === null) {
            $invalidProperties[] = "'license' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
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
     * Gets oTPTrustDays
     *
     * @return int
     */
    public function getOTPTrustDays()
    {
        return $this->container['oTPTrustDays'];
    }

    /**
     * Sets oTPTrustDays
     *
     * @param int $oTPTrustDays oTPTrustDays
     *
     * @return self
     */
    public function setOTPTrustDays($oTPTrustDays)
    {
        if (is_null($oTPTrustDays)) {
            throw new \InvalidArgumentException('non-nullable oTPTrustDays cannot be null');
        }
        $this->container['oTPTrustDays'] = $oTPTrustDays;

        return $this;
    }

    /**
     * Gets allowPasswordReset
     *
     * @return bool
     */
    public function getAllowPasswordReset()
    {
        return $this->container['allowPasswordReset'];
    }

    /**
     * Sets allowPasswordReset
     *
     * @param bool $allowPasswordReset allowPasswordReset
     *
     * @return self
     */
    public function setAllowPasswordReset($allowPasswordReset)
    {
        if (is_null($allowPasswordReset)) {
            throw new \InvalidArgumentException('non-nullable allowPasswordReset cannot be null');
        }
        $this->container['allowPasswordReset'] = $allowPasswordReset;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        if (is_null($hostname)) {
            throw new \InvalidArgumentException('non-nullable hostname cannot be null');
        }
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param string[] $languages languages
     *
     * @return self
     */
    public function setLanguages($languages)
    {
        if (is_null($languages)) {
            throw new \InvalidArgumentException('non-nullable languages cannot be null');
        }
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets license
     *
     * @return \COMPITAUT\DirectAdminAPI\Model\WebLoginLicenseInfo
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param \COMPITAUT\DirectAdminAPI\Model\WebLoginLicenseInfo $license license
     *
     * @return self
     */
    public function setLicense($license)
    {
        if (is_null($license)) {
            throw new \InvalidArgumentException('non-nullable license cannot be null');
        }
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime $time time
     *
     * @return self
     */
    public function setTime($time)
    {
        if (is_null($time)) {
            throw new \InvalidArgumentException('non-nullable time cannot be null');
        }
        $this->container['time'] = $time;

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


