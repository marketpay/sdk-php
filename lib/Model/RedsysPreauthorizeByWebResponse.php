<?php
/**
 * RedsysPreauthorizeByWebResponse
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
 * Swagger Codegen version: 2.4.39
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
 * RedsysPreauthorizeByWebResponse Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RedsysPreauthorizeByWebResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RedsysPreauthorizeByWebResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'preauthorization_id' => 'string',
        'url' => 'string',
        'ds_signature_version' => 'string',
        'ds_merchant_parameters' => 'string',
        'ds_signature' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'preauthorization_id' => null,
        'url' => null,
        'ds_signature_version' => null,
        'ds_merchant_parameters' => null,
        'ds_signature' => null
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
        'preauthorization_id' => 'PreauthorizationId',
        'url' => 'Url',
        'ds_signature_version' => 'Ds_SignatureVersion',
        'ds_merchant_parameters' => 'Ds_MerchantParameters',
        'ds_signature' => 'Ds_Signature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preauthorization_id' => 'setPreauthorizationId',
        'url' => 'setUrl',
        'ds_signature_version' => 'setDsSignatureVersion',
        'ds_merchant_parameters' => 'setDsMerchantParameters',
        'ds_signature' => 'setDsSignature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preauthorization_id' => 'getPreauthorizationId',
        'url' => 'getUrl',
        'ds_signature_version' => 'getDsSignatureVersion',
        'ds_merchant_parameters' => 'getDsMerchantParameters',
        'ds_signature' => 'getDsSignature'
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
        $this->container['preauthorization_id'] = isset($data['preauthorization_id']) ? $data['preauthorization_id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['ds_signature_version'] = isset($data['ds_signature_version']) ? $data['ds_signature_version'] : null;
        $this->container['ds_merchant_parameters'] = isset($data['ds_merchant_parameters']) ? $data['ds_merchant_parameters'] : null;
        $this->container['ds_signature'] = isset($data['ds_signature']) ? $data['ds_signature'] : null;
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
     * Gets preauthorization_id
     *
     * @return string
     */
    public function getPreauthorizationId()
    {
        return $this->container['preauthorization_id'];
    }

    /**
     * Sets preauthorization_id
     *
     * @param string $preauthorization_id Id of the preauthorization
     *
     * @return $this
     */
    public function setPreauthorizationId($preauthorization_id)
    {
        $this->container['preauthorization_id'] = $preauthorization_id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Url to post from the user's browser
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets ds_signature_version
     *
     * @return string
     */
    public function getDsSignatureVersion()
    {
        return $this->container['ds_signature_version'];
    }

    /**
     * Sets ds_signature_version
     *
     * @param string $ds_signature_version This paramater must be include in the Post to the Url
     *
     * @return $this
     */
    public function setDsSignatureVersion($ds_signature_version)
    {
        $this->container['ds_signature_version'] = $ds_signature_version;

        return $this;
    }

    /**
     * Gets ds_merchant_parameters
     *
     * @return string
     */
    public function getDsMerchantParameters()
    {
        return $this->container['ds_merchant_parameters'];
    }

    /**
     * Sets ds_merchant_parameters
     *
     * @param string $ds_merchant_parameters This paramater must be include in the Post to the Url
     *
     * @return $this
     */
    public function setDsMerchantParameters($ds_merchant_parameters)
    {
        $this->container['ds_merchant_parameters'] = $ds_merchant_parameters;

        return $this;
    }

    /**
     * Gets ds_signature
     *
     * @return string
     */
    public function getDsSignature()
    {
        return $this->container['ds_signature'];
    }

    /**
     * Sets ds_signature
     *
     * @param string $ds_signature This paramater must be include in the Post to the Url
     *
     * @return $this
     */
    public function setDsSignature($ds_signature)
    {
        $this->container['ds_signature'] = $ds_signature;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


