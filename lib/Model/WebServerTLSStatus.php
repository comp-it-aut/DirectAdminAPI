<?php
/**
 * WebServerTLSStatus
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
 * WebServerTLSStatus Class Doc Comment
 *
 * @category Class
 * @package  COMPITAUT\DirectAdminAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebServerTLSStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'web.serverTLSStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acmeEnabled' => 'bool',
        'certFileValid' => 'bool',
        'enabled' => 'bool',
        'keyFileValid' => 'bool',
        'validationError' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acmeEnabled' => null,
        'certFileValid' => null,
        'enabled' => null,
        'keyFileValid' => null,
        'validationError' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'acmeEnabled' => false,
        'certFileValid' => false,
        'enabled' => false,
        'keyFileValid' => false,
        'validationError' => false
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
        'acmeEnabled' => 'acmeEnabled',
        'certFileValid' => 'certFileValid',
        'enabled' => 'enabled',
        'keyFileValid' => 'keyFileValid',
        'validationError' => 'validationError'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acmeEnabled' => 'setAcmeEnabled',
        'certFileValid' => 'setCertFileValid',
        'enabled' => 'setEnabled',
        'keyFileValid' => 'setKeyFileValid',
        'validationError' => 'setValidationError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acmeEnabled' => 'getAcmeEnabled',
        'certFileValid' => 'getCertFileValid',
        'enabled' => 'getEnabled',
        'keyFileValid' => 'getKeyFileValid',
        'validationError' => 'getValidationError'
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
        $this->setIfExists('acmeEnabled', $data ?? [], null);
        $this->setIfExists('certFileValid', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('keyFileValid', $data ?? [], null);
        $this->setIfExists('validationError', $data ?? [], null);
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

        if ($this->container['acmeEnabled'] === null) {
            $invalidProperties[] = "'acmeEnabled' can't be null";
        }
        if ($this->container['certFileValid'] === null) {
            $invalidProperties[] = "'certFileValid' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['keyFileValid'] === null) {
            $invalidProperties[] = "'keyFileValid' can't be null";
        }
        if ($this->container['validationError'] === null) {
            $invalidProperties[] = "'validationError' can't be null";
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
     * Gets acmeEnabled
     *
     * @return bool
     */
    public function getAcmeEnabled()
    {
        return $this->container['acmeEnabled'];
    }

    /**
     * Sets acmeEnabled
     *
     * @param bool $acmeEnabled true when automatic server certificate renewal is enabled
     *
     * @return self
     */
    public function setAcmeEnabled($acmeEnabled)
    {
        if (is_null($acmeEnabled)) {
            throw new \InvalidArgumentException('non-nullable acmeEnabled cannot be null');
        }
        $this->container['acmeEnabled'] = $acmeEnabled;

        return $this;
    }

    /**
     * Gets certFileValid
     *
     * @return bool
     */
    public function getCertFileValid()
    {
        return $this->container['certFileValid'];
    }

    /**
     * Sets certFileValid
     *
     * @param bool $certFileValid true if certificate file is present and contains one or more certificates
     *
     * @return self
     */
    public function setCertFileValid($certFileValid)
    {
        if (is_null($certFileValid)) {
            throw new \InvalidArgumentException('non-nullable certFileValid cannot be null');
        }
        $this->container['certFileValid'] = $certFileValid;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled true when DirectAdmin GUI uses TLS
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets keyFileValid
     *
     * @return bool
     */
    public function getKeyFileValid()
    {
        return $this->container['keyFileValid'];
    }

    /**
     * Sets keyFileValid
     *
     * @param bool $keyFileValid true if private key file is present, contains a private key and private key matches the public key in the certificate
     *
     * @return self
     */
    public function setKeyFileValid($keyFileValid)
    {
        if (is_null($keyFileValid)) {
            throw new \InvalidArgumentException('non-nullable keyFileValid cannot be null');
        }
        $this->container['keyFileValid'] = $keyFileValid;

        return $this;
    }

    /**
     * Gets validationError
     *
     * @return string
     */
    public function getValidationError()
    {
        return $this->container['validationError'];
    }

    /**
     * Sets validationError
     *
     * @param string $validationError empty if certificate should be trusted by clients or has a message explaining the problem
     *
     * @return self
     */
    public function setValidationError($validationError)
    {
        if (is_null($validationError)) {
            throw new \InvalidArgumentException('non-nullable validationError cannot be null');
        }
        $this->container['validationError'] = $validationError;

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


