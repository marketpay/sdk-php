<?php
/**
 * KycShareHolderContainerDto
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
 * Swagger Codegen version: 2.4.14
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
 * KycShareHolderContainerDto Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KycShareHolderContainerDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KycShareHolderContainerDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_card' => '\MarketPay\Model\PropertyValidationString',
        'id_card_document' => '\MarketPay\Model\TKycFileDetails',
        'country' => '\MarketPay\Model\PropertyValidationCountry',
        'email' => '\MarketPay\Model\PropertyValidationString',
        'first_name' => '\MarketPay\Model\PropertyValidationString',
        'last_name' => '\MarketPay\Model\PropertyValidationString',
        'occupation' => '\MarketPay\Model\PropertyValidationString',
        'telephone' => '\MarketPay\Model\TTelephoneValidationResult',
        'address' => '\MarketPay\Model\TAddressValidationResult',
        'share_percentage' => '\MarketPay\Model\PropertyValidationDecimal',
        'nationality' => '\MarketPay\Model\PropertyValidationCountry',
        'country_of_residence' => '\MarketPay\Model\PropertyValidationCountry',
        'birthday' => '\MarketPay\Model\PropertyValidationDateNullable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'id_card' => null,
        'id_card_document' => null,
        'country' => null,
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'occupation' => null,
        'telephone' => null,
        'address' => null,
        'share_percentage' => null,
        'nationality' => null,
        'country_of_residence' => null,
        'birthday' => null
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
        'id' => 'Id',
        'id_card' => 'IdCard',
        'id_card_document' => 'IdCardDocument',
        'country' => 'Country',
        'email' => 'Email',
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'occupation' => 'Occupation',
        'telephone' => 'Telephone',
        'address' => 'Address',
        'share_percentage' => 'SharePercentage',
        'nationality' => 'Nationality',
        'country_of_residence' => 'CountryOfResidence',
        'birthday' => 'Birthday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_card' => 'setIdCard',
        'id_card_document' => 'setIdCardDocument',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'occupation' => 'setOccupation',
        'telephone' => 'setTelephone',
        'address' => 'setAddress',
        'share_percentage' => 'setSharePercentage',
        'nationality' => 'setNationality',
        'country_of_residence' => 'setCountryOfResidence',
        'birthday' => 'setBirthday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_card' => 'getIdCard',
        'id_card_document' => 'getIdCardDocument',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'occupation' => 'getOccupation',
        'telephone' => 'getTelephone',
        'address' => 'getAddress',
        'share_percentage' => 'getSharePercentage',
        'nationality' => 'getNationality',
        'country_of_residence' => 'getCountryOfResidence',
        'birthday' => 'getBirthday'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['id_card'] = isset($data['id_card']) ? $data['id_card'] : null;
        $this->container['id_card_document'] = isset($data['id_card_document']) ? $data['id_card_document'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['occupation'] = isset($data['occupation']) ? $data['occupation'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['share_percentage'] = isset($data['share_percentage']) ? $data['share_percentage'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['country_of_residence'] = isset($data['country_of_residence']) ? $data['country_of_residence'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_card
     *
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getIdCard()
    {
        return $this->container['id_card'];
    }

    /**
     * Sets id_card
     *
     * @param \MarketPay\Model\PropertyValidationString $id_card id_card
     *
     * @return $this
     */
    public function setIdCard($id_card)
    {
        $this->container['id_card'] = $id_card;

        return $this;
    }

    /**
     * Gets id_card_document
     *
     * @return \MarketPay\Model\TKycFileDetails
     */
    public function getIdCardDocument()
    {
        return $this->container['id_card_document'];
    }

    /**
     * Sets id_card_document
     *
     * @param \MarketPay\Model\TKycFileDetails $id_card_document id_card_document
     *
     * @return $this
     */
    public function setIdCardDocument($id_card_document)
    {
        $this->container['id_card_document'] = $id_card_document;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \MarketPay\Model\PropertyValidationCountry
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \MarketPay\Model\PropertyValidationCountry $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \MarketPay\Model\PropertyValidationString $email email
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
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param \MarketPay\Model\PropertyValidationString $first_name first_name
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
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param \MarketPay\Model\PropertyValidationString $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets occupation
     *
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     *
     * @param \MarketPay\Model\PropertyValidationString $occupation occupation
     *
     * @return $this
     */
    public function setOccupation($occupation)
    {
        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return \MarketPay\Model\TTelephoneValidationResult
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param \MarketPay\Model\TTelephoneValidationResult $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \MarketPay\Model\TAddressValidationResult
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \MarketPay\Model\TAddressValidationResult $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets share_percentage
     *
     * @return \MarketPay\Model\PropertyValidationDecimal
     */
    public function getSharePercentage()
    {
        return $this->container['share_percentage'];
    }

    /**
     * Sets share_percentage
     *
     * @param \MarketPay\Model\PropertyValidationDecimal $share_percentage share_percentage
     *
     * @return $this
     */
    public function setSharePercentage($share_percentage)
    {
        $this->container['share_percentage'] = $share_percentage;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return \MarketPay\Model\PropertyValidationCountry
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param \MarketPay\Model\PropertyValidationCountry $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets country_of_residence
     *
     * @return \MarketPay\Model\PropertyValidationCountry
     */
    public function getCountryOfResidence()
    {
        return $this->container['country_of_residence'];
    }

    /**
     * Sets country_of_residence
     *
     * @param \MarketPay\Model\PropertyValidationCountry $country_of_residence country_of_residence
     *
     * @return $this
     */
    public function setCountryOfResidence($country_of_residence)
    {
        $this->container['country_of_residence'] = $country_of_residence;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \MarketPay\Model\PropertyValidationDateNullable
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \MarketPay\Model\PropertyValidationDateNullable $birthday birthday
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

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


