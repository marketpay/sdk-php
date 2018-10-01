<?php
/**
 * Money
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
 * Swagger Codegen version: 2.3.1
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
 * Money Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Money implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Money';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency' => 'string',
        'amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency' => null,
        'amount' => 'int64'
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
        'currency' => 'Currency',
        'amount' => 'Amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'amount' => 'getAmount'
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

    const CURRENCY_NOT_SPECIFIED = 'NotSpecified';
    const CURRENCY_XXX = 'XXX';
    const CURRENCY_AED = 'AED';
    const CURRENCY_AFN = 'AFN';
    const CURRENCY_ALL = 'ALL';
    const CURRENCY_AMD = 'AMD';
    const CURRENCY_ANG = 'ANG';
    const CURRENCY_AOA = 'AOA';
    const CURRENCY_ARS = 'ARS';
    const CURRENCY_AUD = 'AUD';
    const CURRENCY_AWG = 'AWG';
    const CURRENCY_AZN = 'AZN';
    const CURRENCY_BAM = 'BAM';
    const CURRENCY_BBD = 'BBD';
    const CURRENCY_BDT = 'BDT';
    const CURRENCY_BGN = 'BGN';
    const CURRENCY_BHD = 'BHD';
    const CURRENCY_BIF = 'BIF';
    const CURRENCY_BMD = 'BMD';
    const CURRENCY_BND = 'BND';
    const CURRENCY_BOB = 'BOB';
    const CURRENCY_BOV = 'BOV';
    const CURRENCY_BRL = 'BRL';
    const CURRENCY_BSD = 'BSD';
    const CURRENCY_BTN = 'BTN';
    const CURRENCY_BWP = 'BWP';
    const CURRENCY_BYR = 'BYR';
    const CURRENCY_BZD = 'BZD';
    const CURRENCY_CAD = 'CAD';
    const CURRENCY_CDF = 'CDF';
    const CURRENCY_CHE = 'CHE';
    const CURRENCY_CHF = 'CHF';
    const CURRENCY_CHW = 'CHW';
    const CURRENCY_CLF = 'CLF';
    const CURRENCY_CLP = 'CLP';
    const CURRENCY_CNY = 'CNY';
    const CURRENCY_COP = 'COP';
    const CURRENCY_COU = 'COU';
    const CURRENCY_CRC = 'CRC';
    const CURRENCY_CUC = 'CUC';
    const CURRENCY_CUP = 'CUP';
    const CURRENCY_CVE = 'CVE';
    const CURRENCY_CZK = 'CZK';
    const CURRENCY_DJF = 'DJF';
    const CURRENCY_DKK = 'DKK';
    const CURRENCY_DOP = 'DOP';
    const CURRENCY_DZD = 'DZD';
    const CURRENCY_EGP = 'EGP';
    const CURRENCY_ERN = 'ERN';
    const CURRENCY_ETB = 'ETB';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_FJD = 'FJD';
    const CURRENCY_FKP = 'FKP';
    const CURRENCY_GBP = 'GBP';
    const CURRENCY_GEL = 'GEL';
    const CURRENCY_GHS = 'GHS';
    const CURRENCY_GIP = 'GIP';
    const CURRENCY_GMD = 'GMD';
    const CURRENCY_GNF = 'GNF';
    const CURRENCY_GTQ = 'GTQ';
    const CURRENCY_GYD = 'GYD';
    const CURRENCY_HKD = 'HKD';
    const CURRENCY_HNL = 'HNL';
    const CURRENCY_HRK = 'HRK';
    const CURRENCY_HTG = 'HTG';
    const CURRENCY_HUF = 'HUF';
    const CURRENCY_IDR = 'IDR';
    const CURRENCY_ILS = 'ILS';
    const CURRENCY_INR = 'INR';
    const CURRENCY_IQD = 'IQD';
    const CURRENCY_IRR = 'IRR';
    const CURRENCY_ISK = 'ISK';
    const CURRENCY_JMD = 'JMD';
    const CURRENCY_JOD = 'JOD';
    const CURRENCY_JPY = 'JPY';
    const CURRENCY_KES = 'KES';
    const CURRENCY_KGS = 'KGS';
    const CURRENCY_KHR = 'KHR';
    const CURRENCY_KMF = 'KMF';
    const CURRENCY_KPW = 'KPW';
    const CURRENCY_KRW = 'KRW';
    const CURRENCY_KWD = 'KWD';
    const CURRENCY_KYD = 'KYD';
    const CURRENCY_KZT = 'KZT';
    const CURRENCY_LAK = 'LAK';
    const CURRENCY_LBP = 'LBP';
    const CURRENCY_LKR = 'LKR';
    const CURRENCY_LRD = 'LRD';
    const CURRENCY_LSL = 'LSL';
    const CURRENCY_LTL = 'LTL';
    const CURRENCY_LYD = 'LYD';
    const CURRENCY_MAD = 'MAD';
    const CURRENCY_MDL = 'MDL';
    const CURRENCY_MGA = 'MGA';
    const CURRENCY_MKD = 'MKD';
    const CURRENCY_MMK = 'MMK';
    const CURRENCY_MNT = 'MNT';
    const CURRENCY_MOP = 'MOP';
    const CURRENCY_MRO = 'MRO';
    const CURRENCY_MUR = 'MUR';
    const CURRENCY_MVR = 'MVR';
    const CURRENCY_MWK = 'MWK';
    const CURRENCY_MXN = 'MXN';
    const CURRENCY_MXV = 'MXV';
    const CURRENCY_MYR = 'MYR';
    const CURRENCY_MZN = 'MZN';
    const CURRENCY_NAD = 'NAD';
    const CURRENCY_NGN = 'NGN';
    const CURRENCY_NIO = 'NIO';
    const CURRENCY_NOK = 'NOK';
    const CURRENCY_NPR = 'NPR';
    const CURRENCY_NZD = 'NZD';
    const CURRENCY_OMR = 'OMR';
    const CURRENCY_PAB = 'PAB';
    const CURRENCY_PEN = 'PEN';
    const CURRENCY_PGK = 'PGK';
    const CURRENCY_PHP = 'PHP';
    const CURRENCY_PKR = 'PKR';
    const CURRENCY_PLN = 'PLN';
    const CURRENCY_PYG = 'PYG';
    const CURRENCY_QAR = 'QAR';
    const CURRENCY_RON = 'RON';
    const CURRENCY_RSD = 'RSD';
    const CURRENCY_RUB = 'RUB';
    const CURRENCY_RWF = 'RWF';
    const CURRENCY_SAR = 'SAR';
    const CURRENCY_SBD = 'SBD';
    const CURRENCY_SCR = 'SCR';
    const CURRENCY_SDG = 'SDG';
    const CURRENCY_SEK = 'SEK';
    const CURRENCY_SGD = 'SGD';
    const CURRENCY_SHP = 'SHP';
    const CURRENCY_SLL = 'SLL';
    const CURRENCY_SOS = 'SOS';
    const CURRENCY_SRD = 'SRD';
    const CURRENCY_SSP = 'SSP';
    const CURRENCY_STD = 'STD';
    const CURRENCY_SYP = 'SYP';
    const CURRENCY_SZL = 'SZL';
    const CURRENCY_THB = 'THB';
    const CURRENCY_TJS = 'TJS';
    const CURRENCY_TMT = 'TMT';
    const CURRENCY_TND = 'TND';
    const CURRENCY_TOP = 'TOP';
    const CURRENCY__TRY = 'TRY';
    const CURRENCY_TTD = 'TTD';
    const CURRENCY_TWD = 'TWD';
    const CURRENCY_TZS = 'TZS';
    const CURRENCY_UAH = 'UAH';
    const CURRENCY_UGX = 'UGX';
    const CURRENCY_USD = 'USD';
    const CURRENCY_USN = 'USN';
    const CURRENCY_USS = 'USS';
    const CURRENCY_UYI = 'UYI';
    const CURRENCY_UYU = 'UYU';
    const CURRENCY_UZS = 'UZS';
    const CURRENCY_VEF = 'VEF';
    const CURRENCY_VND = 'VND';
    const CURRENCY_VUV = 'VUV';
    const CURRENCY_WST = 'WST';
    const CURRENCY_XAF = 'XAF';
    const CURRENCY_XAG = 'XAG';
    const CURRENCY_XAU = 'XAU';
    const CURRENCY_XBA = 'XBA';
    const CURRENCY_XBB = 'XBB';
    const CURRENCY_XBC = 'XBC';
    const CURRENCY_XBD = 'XBD';
    const CURRENCY_XBT = 'XBT';
    const CURRENCY_XCD = 'XCD';
    const CURRENCY_XDR = 'XDR';
    const CURRENCY_XFU = 'XFU';
    const CURRENCY_XOF = 'XOF';
    const CURRENCY_XPD = 'XPD';
    const CURRENCY_XPF = 'XPF';
    const CURRENCY_XPT = 'XPT';
    const CURRENCY_XSU = 'XSU';
    const CURRENCY_XTS = 'XTS';
    const CURRENCY_XUA = 'XUA';
    const CURRENCY_YER = 'YER';
    const CURRENCY_ZAR = 'ZAR';
    const CURRENCY_ZMW = 'ZMW';
    const CURRENCY_ZWD = 'ZWD';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_NOT_SPECIFIED,
            self::CURRENCY_XXX,
            self::CURRENCY_AED,
            self::CURRENCY_AFN,
            self::CURRENCY_ALL,
            self::CURRENCY_AMD,
            self::CURRENCY_ANG,
            self::CURRENCY_AOA,
            self::CURRENCY_ARS,
            self::CURRENCY_AUD,
            self::CURRENCY_AWG,
            self::CURRENCY_AZN,
            self::CURRENCY_BAM,
            self::CURRENCY_BBD,
            self::CURRENCY_BDT,
            self::CURRENCY_BGN,
            self::CURRENCY_BHD,
            self::CURRENCY_BIF,
            self::CURRENCY_BMD,
            self::CURRENCY_BND,
            self::CURRENCY_BOB,
            self::CURRENCY_BOV,
            self::CURRENCY_BRL,
            self::CURRENCY_BSD,
            self::CURRENCY_BTN,
            self::CURRENCY_BWP,
            self::CURRENCY_BYR,
            self::CURRENCY_BZD,
            self::CURRENCY_CAD,
            self::CURRENCY_CDF,
            self::CURRENCY_CHE,
            self::CURRENCY_CHF,
            self::CURRENCY_CHW,
            self::CURRENCY_CLF,
            self::CURRENCY_CLP,
            self::CURRENCY_CNY,
            self::CURRENCY_COP,
            self::CURRENCY_COU,
            self::CURRENCY_CRC,
            self::CURRENCY_CUC,
            self::CURRENCY_CUP,
            self::CURRENCY_CVE,
            self::CURRENCY_CZK,
            self::CURRENCY_DJF,
            self::CURRENCY_DKK,
            self::CURRENCY_DOP,
            self::CURRENCY_DZD,
            self::CURRENCY_EGP,
            self::CURRENCY_ERN,
            self::CURRENCY_ETB,
            self::CURRENCY_EUR,
            self::CURRENCY_FJD,
            self::CURRENCY_FKP,
            self::CURRENCY_GBP,
            self::CURRENCY_GEL,
            self::CURRENCY_GHS,
            self::CURRENCY_GIP,
            self::CURRENCY_GMD,
            self::CURRENCY_GNF,
            self::CURRENCY_GTQ,
            self::CURRENCY_GYD,
            self::CURRENCY_HKD,
            self::CURRENCY_HNL,
            self::CURRENCY_HRK,
            self::CURRENCY_HTG,
            self::CURRENCY_HUF,
            self::CURRENCY_IDR,
            self::CURRENCY_ILS,
            self::CURRENCY_INR,
            self::CURRENCY_IQD,
            self::CURRENCY_IRR,
            self::CURRENCY_ISK,
            self::CURRENCY_JMD,
            self::CURRENCY_JOD,
            self::CURRENCY_JPY,
            self::CURRENCY_KES,
            self::CURRENCY_KGS,
            self::CURRENCY_KHR,
            self::CURRENCY_KMF,
            self::CURRENCY_KPW,
            self::CURRENCY_KRW,
            self::CURRENCY_KWD,
            self::CURRENCY_KYD,
            self::CURRENCY_KZT,
            self::CURRENCY_LAK,
            self::CURRENCY_LBP,
            self::CURRENCY_LKR,
            self::CURRENCY_LRD,
            self::CURRENCY_LSL,
            self::CURRENCY_LTL,
            self::CURRENCY_LYD,
            self::CURRENCY_MAD,
            self::CURRENCY_MDL,
            self::CURRENCY_MGA,
            self::CURRENCY_MKD,
            self::CURRENCY_MMK,
            self::CURRENCY_MNT,
            self::CURRENCY_MOP,
            self::CURRENCY_MRO,
            self::CURRENCY_MUR,
            self::CURRENCY_MVR,
            self::CURRENCY_MWK,
            self::CURRENCY_MXN,
            self::CURRENCY_MXV,
            self::CURRENCY_MYR,
            self::CURRENCY_MZN,
            self::CURRENCY_NAD,
            self::CURRENCY_NGN,
            self::CURRENCY_NIO,
            self::CURRENCY_NOK,
            self::CURRENCY_NPR,
            self::CURRENCY_NZD,
            self::CURRENCY_OMR,
            self::CURRENCY_PAB,
            self::CURRENCY_PEN,
            self::CURRENCY_PGK,
            self::CURRENCY_PHP,
            self::CURRENCY_PKR,
            self::CURRENCY_PLN,
            self::CURRENCY_PYG,
            self::CURRENCY_QAR,
            self::CURRENCY_RON,
            self::CURRENCY_RSD,
            self::CURRENCY_RUB,
            self::CURRENCY_RWF,
            self::CURRENCY_SAR,
            self::CURRENCY_SBD,
            self::CURRENCY_SCR,
            self::CURRENCY_SDG,
            self::CURRENCY_SEK,
            self::CURRENCY_SGD,
            self::CURRENCY_SHP,
            self::CURRENCY_SLL,
            self::CURRENCY_SOS,
            self::CURRENCY_SRD,
            self::CURRENCY_SSP,
            self::CURRENCY_STD,
            self::CURRENCY_SYP,
            self::CURRENCY_SZL,
            self::CURRENCY_THB,
            self::CURRENCY_TJS,
            self::CURRENCY_TMT,
            self::CURRENCY_TND,
            self::CURRENCY_TOP,
            self::CURRENCY__TRY,
            self::CURRENCY_TTD,
            self::CURRENCY_TWD,
            self::CURRENCY_TZS,
            self::CURRENCY_UAH,
            self::CURRENCY_UGX,
            self::CURRENCY_USD,
            self::CURRENCY_USN,
            self::CURRENCY_USS,
            self::CURRENCY_UYI,
            self::CURRENCY_UYU,
            self::CURRENCY_UZS,
            self::CURRENCY_VEF,
            self::CURRENCY_VND,
            self::CURRENCY_VUV,
            self::CURRENCY_WST,
            self::CURRENCY_XAF,
            self::CURRENCY_XAG,
            self::CURRENCY_XAU,
            self::CURRENCY_XBA,
            self::CURRENCY_XBB,
            self::CURRENCY_XBC,
            self::CURRENCY_XBD,
            self::CURRENCY_XBT,
            self::CURRENCY_XCD,
            self::CURRENCY_XDR,
            self::CURRENCY_XFU,
            self::CURRENCY_XOF,
            self::CURRENCY_XPD,
            self::CURRENCY_XPF,
            self::CURRENCY_XPT,
            self::CURRENCY_XSU,
            self::CURRENCY_XTS,
            self::CURRENCY_XUA,
            self::CURRENCY_YER,
            self::CURRENCY_ZAR,
            self::CURRENCY_ZMW,
            self::CURRENCY_ZWD,
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($this->container['currency'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
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

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($this->container['currency'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency - should be ISO_4217 format
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount An amount of money in cents, e.g. 12.60€ would be represented as 1260
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


