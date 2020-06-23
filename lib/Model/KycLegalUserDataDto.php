<?php
/**
 * KycLegalUserDataDto
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
 * KycLegalUserDataDto Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KycLegalUserDataDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KycLegalUserDataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => '\MarketPay\Model\PropertyValidationString',
        'contact_first_name' => '\MarketPay\Model\PropertyValidationString',
        'contact_last_name' => '\MarketPay\Model\PropertyValidationString',
        'fiscal_address' => '\MarketPay\Model\TAddressValidationResult',
        'telephone' => '\MarketPay\Model\TTelephoneValidationResult',
        'country' => '\MarketPay\Model\PropertyValidationCountry',
        'fiscal_id' => '\MarketPay\Model\PropertyValidationString',
        'fiscal_id_document' => '\MarketPay\Model\TKycFileDetails',
        'name' => '\MarketPay\Model\PropertyValidationString',
        'power_of_attorney' => '\MarketPay\Model\TKycFileDetails',
        'registration_proof' => '\MarketPay\Model\TKycFileDetails',
        'share_capital_increase' => '\MarketPay\Model\TKycFileDetails',
        'shareholder_declaration' => '\MarketPay\Model\TKycFileDetails',
        'statute' => '\MarketPay\Model\TKycFileDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'contact_first_name' => null,
        'contact_last_name' => null,
        'fiscal_address' => null,
        'telephone' => null,
        'country' => null,
        'fiscal_id' => null,
        'fiscal_id_document' => null,
        'name' => null,
        'power_of_attorney' => null,
        'registration_proof' => null,
        'share_capital_increase' => null,
        'shareholder_declaration' => null,
        'statute' => null
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
        'email' => 'Email',
        'contact_first_name' => 'ContactFirstName',
        'contact_last_name' => 'ContactLastName',
        'fiscal_address' => 'FiscalAddress',
        'telephone' => 'Telephone',
        'country' => 'Country',
        'fiscal_id' => 'FiscalId',
        'fiscal_id_document' => 'FiscalIdDocument',
        'name' => 'Name',
        'power_of_attorney' => 'PowerOfAttorney',
        'registration_proof' => 'RegistrationProof',
        'share_capital_increase' => 'ShareCapitalIncrease',
        'shareholder_declaration' => 'ShareholderDeclaration',
        'statute' => 'Statute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'contact_first_name' => 'setContactFirstName',
        'contact_last_name' => 'setContactLastName',
        'fiscal_address' => 'setFiscalAddress',
        'telephone' => 'setTelephone',
        'country' => 'setCountry',
        'fiscal_id' => 'setFiscalId',
        'fiscal_id_document' => 'setFiscalIdDocument',
        'name' => 'setName',
        'power_of_attorney' => 'setPowerOfAttorney',
        'registration_proof' => 'setRegistrationProof',
        'share_capital_increase' => 'setShareCapitalIncrease',
        'shareholder_declaration' => 'setShareholderDeclaration',
        'statute' => 'setStatute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'contact_first_name' => 'getContactFirstName',
        'contact_last_name' => 'getContactLastName',
        'fiscal_address' => 'getFiscalAddress',
        'telephone' => 'getTelephone',
        'country' => 'getCountry',
        'fiscal_id' => 'getFiscalId',
        'fiscal_id_document' => 'getFiscalIdDocument',
        'name' => 'getName',
        'power_of_attorney' => 'getPowerOfAttorney',
        'registration_proof' => 'getRegistrationProof',
        'share_capital_increase' => 'getShareCapitalIncrease',
        'shareholder_declaration' => 'getShareholderDeclaration',
        'statute' => 'getStatute'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['contact_first_name'] = isset($data['contact_first_name']) ? $data['contact_first_name'] : null;
        $this->container['contact_last_name'] = isset($data['contact_last_name']) ? $data['contact_last_name'] : null;
        $this->container['fiscal_address'] = isset($data['fiscal_address']) ? $data['fiscal_address'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['fiscal_id'] = isset($data['fiscal_id']) ? $data['fiscal_id'] : null;
        $this->container['fiscal_id_document'] = isset($data['fiscal_id_document']) ? $data['fiscal_id_document'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['power_of_attorney'] = isset($data['power_of_attorney']) ? $data['power_of_attorney'] : null;
        $this->container['registration_proof'] = isset($data['registration_proof']) ? $data['registration_proof'] : null;
        $this->container['share_capital_increase'] = isset($data['share_capital_increase']) ? $data['share_capital_increase'] : null;
        $this->container['shareholder_declaration'] = isset($data['shareholder_declaration']) ? $data['shareholder_declaration'] : null;
        $this->container['statute'] = isset($data['statute']) ? $data['statute'] : null;
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
     * Gets contact_first_name
     *
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getContactFirstName()
    {
        return $this->container['contact_first_name'];
    }

    /**
     * Sets contact_first_name
     *
     * @param \MarketPay\Model\PropertyValidationString $contact_first_name contact_first_name
     *
     * @return $this
     */
    public function setContactFirstName($contact_first_name)
    {
        $this->container['contact_first_name'] = $contact_first_name;

        return $this;
    }

    /**
     * Gets contact_last_name
     *
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getContactLastName()
    {
        return $this->container['contact_last_name'];
    }

    /**
     * Sets contact_last_name
     *
     * @param \MarketPay\Model\PropertyValidationString $contact_last_name contact_last_name
     *
     * @return $this
     */
    public function setContactLastName($contact_last_name)
    {
        $this->container['contact_last_name'] = $contact_last_name;

        return $this;
    }

    /**
     * Gets fiscal_address
     *
     * @return \MarketPay\Model\TAddressValidationResult
     */
    public function getFiscalAddress()
    {
        return $this->container['fiscal_address'];
    }

    /**
     * Sets fiscal_address
     *
     * @param \MarketPay\Model\TAddressValidationResult $fiscal_address fiscal_address
     *
     * @return $this
     */
    public function setFiscalAddress($fiscal_address)
    {
        $this->container['fiscal_address'] = $fiscal_address;

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
     * Gets fiscal_id
     *
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getFiscalId()
    {
        return $this->container['fiscal_id'];
    }

    /**
     * Sets fiscal_id
     *
     * @param \MarketPay\Model\PropertyValidationString $fiscal_id fiscal_id
     *
     * @return $this
     */
    public function setFiscalId($fiscal_id)
    {
        $this->container['fiscal_id'] = $fiscal_id;

        return $this;
    }

    /**
     * Gets fiscal_id_document
     *
     * @return \MarketPay\Model\TKycFileDetails
     */
    public function getFiscalIdDocument()
    {
        return $this->container['fiscal_id_document'];
    }

    /**
     * Sets fiscal_id_document
     *
     * @param \MarketPay\Model\TKycFileDetails $fiscal_id_document fiscal_id_document
     *
     * @return $this
     */
    public function setFiscalIdDocument($fiscal_id_document)
    {
        $this->container['fiscal_id_document'] = $fiscal_id_document;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \MarketPay\Model\PropertyValidationString
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \MarketPay\Model\PropertyValidationString $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets power_of_attorney
     *
     * @return \MarketPay\Model\TKycFileDetails
     */
    public function getPowerOfAttorney()
    {
        return $this->container['power_of_attorney'];
    }

    /**
     * Sets power_of_attorney
     *
     * @param \MarketPay\Model\TKycFileDetails $power_of_attorney power_of_attorney
     *
     * @return $this
     */
    public function setPowerOfAttorney($power_of_attorney)
    {
        $this->container['power_of_attorney'] = $power_of_attorney;

        return $this;
    }

    /**
     * Gets registration_proof
     *
     * @return \MarketPay\Model\TKycFileDetails
     */
    public function getRegistrationProof()
    {
        return $this->container['registration_proof'];
    }

    /**
     * Sets registration_proof
     *
     * @param \MarketPay\Model\TKycFileDetails $registration_proof registration_proof
     *
     * @return $this
     */
    public function setRegistrationProof($registration_proof)
    {
        $this->container['registration_proof'] = $registration_proof;

        return $this;
    }

    /**
     * Gets share_capital_increase
     *
     * @return \MarketPay\Model\TKycFileDetails
     */
    public function getShareCapitalIncrease()
    {
        return $this->container['share_capital_increase'];
    }

    /**
     * Sets share_capital_increase
     *
     * @param \MarketPay\Model\TKycFileDetails $share_capital_increase share_capital_increase
     *
     * @return $this
     */
    public function setShareCapitalIncrease($share_capital_increase)
    {
        $this->container['share_capital_increase'] = $share_capital_increase;

        return $this;
    }

    /**
     * Gets shareholder_declaration
     *
     * @return \MarketPay\Model\TKycFileDetails
     */
    public function getShareholderDeclaration()
    {
        return $this->container['shareholder_declaration'];
    }

    /**
     * Sets shareholder_declaration
     *
     * @param \MarketPay\Model\TKycFileDetails $shareholder_declaration shareholder_declaration
     *
     * @return $this
     */
    public function setShareholderDeclaration($shareholder_declaration)
    {
        $this->container['shareholder_declaration'] = $shareholder_declaration;

        return $this;
    }

    /**
     * Gets statute
     *
     * @return \MarketPay\Model\TKycFileDetails
     */
    public function getStatute()
    {
        return $this->container['statute'];
    }

    /**
     * Sets statute
     *
     * @param \MarketPay\Model\TKycFileDetails $statute statute
     *
     * @return $this
     */
    public function setStatute($statute)
    {
        $this->container['statute'] = $statute;

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


