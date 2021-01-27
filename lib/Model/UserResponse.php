<?php
/**
 * UserResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MarketPay API
 *
 * API for Smart Contracts and Payments
 *
 * OpenAPI spec version: v2.01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MarketPay\Model;

use \ArrayAccess;
use \MarketPay\ObjectSerializer;

/**
 * UserResponse Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'person_type' => 'string',
        'kyc_level' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'id' => 'string',
        'creation_date' => 'int',
        'tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'person_type' => null,
        'kyc_level' => null,
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'id' => null,
        'creation_date' => 'int64',
        'tag' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'person_type' => 'PersonType',
        'kyc_level' => 'KYCLevel',
        'email' => 'Email',
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'id' => 'Id',
        'creation_date' => 'CreationDate',
        'tag' => 'Tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'person_type' => 'setPersonType',
        'kyc_level' => 'setKycLevel',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'id' => 'setId',
        'creation_date' => 'setCreationDate',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'person_type' => 'getPersonType',
        'kyc_level' => 'getKycLevel',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'id' => 'getId',
        'creation_date' => 'getCreationDate',
        'tag' => 'getTag'
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
        return self::$swaggerModelName;
    }

    const PERSON_TYPE_NATURAL = 'Natural';
    const PERSON_TYPE_LEGAL = 'Legal';
    const PERSON_TYPE_FEES = 'Fees';
    const KYC_LEVEL_NOT_SPECIFIED = 'NotSpecified';
    const KYC_LEVEL_LIGHT = 'LIGHT';
    const KYC_LEVEL_REGULAR = 'REGULAR';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPersonTypeAllowableValues()
    {
        return [
            self::PERSON_TYPE_NATURAL,
            self::PERSON_TYPE_LEGAL,
            self::PERSON_TYPE_FEES,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKycLevelAllowableValues()
    {
        return [
            self::KYC_LEVEL_NOT_SPECIFIED,
            self::KYC_LEVEL_LIGHT,
            self::KYC_LEVEL_REGULAR,
        ];
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['person_type'] = isset($data['person_type']) ? $data['person_type'] : null;
        $this->container['kyc_level'] = isset($data['kyc_level']) ? $data['kyc_level'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPersonTypeAllowableValues();
        if (!is_null($this->container['person_type']) && !in_array($this->container['person_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'person_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getKycLevelAllowableValues();
        if (!is_null($this->container['kyc_level']) && !in_array($this->container['kyc_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kyc_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets person_type
     *
     * @return string
     */
    public function getPersonType()
    {
        return $this->container['person_type'];
    }

    /**
     * Sets person_type
     *
     * @param string $person_type Type of user
     *
     * @return $this
     */
    public function setPersonType($person_type)
    {
        $allowedValues = $this->getPersonTypeAllowableValues();
        if (!is_null($person_type) && !in_array($person_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'person_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['person_type'] = $person_type;

        return $this;
    }

    /**
     * Gets kyc_level
     *
     * @return string
     */
    public function getKycLevel()
    {
        return $this->container['kyc_level'];
    }

    /**
     * Sets kyc_level
     *
     * @param string $kyc_level 
     *
     * @return $this
     */
    public function setKycLevel($kyc_level)
    {
        $allowedValues = $this->getKycLevelAllowableValues();
        if (!is_null($kyc_level) && !in_array($kyc_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kyc_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kyc_level'] = $kyc_level;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The user's email address - must be a valid email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The name of the user
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name The last name of the user
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The item's ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int $creation_date When the item was created
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag Custom data that you can add to this item
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


