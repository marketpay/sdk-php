<?php
/**
 * AddonPaymentsPayByWebPost
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
 * AddonPaymentsPayByWebPost Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddonPaymentsPayByWebPost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddonPaymentsPayByWebPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'save_card' => 'bool',
        'card_id' => 'string',
        'credited_wallet_id' => 'string',
        'statement_descriptor' => 'string',
        'success_url' => 'string',
        'cancel_url' => 'string',
        'debited_funds' => '\MarketPay\Model\Money',
        'fees' => '\MarketPay\Model\Money',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tag' => null,
        'save_card' => null,
        'card_id' => null,
        'credited_wallet_id' => null,
        'statement_descriptor' => null,
        'success_url' => null,
        'cancel_url' => null,
        'debited_funds' => null,
        'fees' => null,
        'language' => null
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
        'tag' => 'Tag',
        'save_card' => 'SaveCard',
        'card_id' => 'CardId',
        'credited_wallet_id' => 'CreditedWalletId',
        'statement_descriptor' => 'StatementDescriptor',
        'success_url' => 'SuccessUrl',
        'cancel_url' => 'CancelUrl',
        'debited_funds' => 'DebitedFunds',
        'fees' => 'Fees',
        'language' => 'Language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'save_card' => 'setSaveCard',
        'card_id' => 'setCardId',
        'credited_wallet_id' => 'setCreditedWalletId',
        'statement_descriptor' => 'setStatementDescriptor',
        'success_url' => 'setSuccessUrl',
        'cancel_url' => 'setCancelUrl',
        'debited_funds' => 'setDebitedFunds',
        'fees' => 'setFees',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'save_card' => 'getSaveCard',
        'card_id' => 'getCardId',
        'credited_wallet_id' => 'getCreditedWalletId',
        'statement_descriptor' => 'getStatementDescriptor',
        'success_url' => 'getSuccessUrl',
        'cancel_url' => 'getCancelUrl',
        'debited_funds' => 'getDebitedFunds',
        'fees' => 'getFees',
        'language' => 'getLanguage'
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

    const LANGUAGE_NOT_SPECIFIED = 'NotSpecified';
    const LANGUAGE_CA = 'CA';
    const LANGUAGE_DE = 'DE';
    const LANGUAGE_EN = 'EN';
    const LANGUAGE_DA = 'DA';
    const LANGUAGE_ES = 'ES';
    const LANGUAGE_ET = 'ET';
    const LANGUAGE_GL = 'GL';
    const LANGUAGE_FI = 'FI';
    const LANGUAGE_FR = 'FR';
    const LANGUAGE_EL = 'EL';
    const LANGUAGE_EU = 'EU';
    const LANGUAGE_HU = 'HU';
    const LANGUAGE_IT = 'IT';
    const LANGUAGE_NL = 'NL';
    const LANGUAGE_NO = 'NO';
    const LANGUAGE_PL = 'PL';
    const LANGUAGE_PT = 'PT';
    const LANGUAGE_SK = 'SK';
    const LANGUAGE_SV = 'SV';
    const LANGUAGE_CS = 'CS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_NOT_SPECIFIED,
            self::LANGUAGE_CA,
            self::LANGUAGE_DE,
            self::LANGUAGE_EN,
            self::LANGUAGE_DA,
            self::LANGUAGE_ES,
            self::LANGUAGE_ET,
            self::LANGUAGE_GL,
            self::LANGUAGE_FI,
            self::LANGUAGE_FR,
            self::LANGUAGE_EL,
            self::LANGUAGE_EU,
            self::LANGUAGE_HU,
            self::LANGUAGE_IT,
            self::LANGUAGE_NL,
            self::LANGUAGE_NO,
            self::LANGUAGE_PL,
            self::LANGUAGE_PT,
            self::LANGUAGE_SK,
            self::LANGUAGE_SV,
            self::LANGUAGE_CS,
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['save_card'] = isset($data['save_card']) ? $data['save_card'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['credited_wallet_id'] = isset($data['credited_wallet_id']) ? $data['credited_wallet_id'] : null;
        $this->container['statement_descriptor'] = isset($data['statement_descriptor']) ? $data['statement_descriptor'] : null;
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
        $this->container['debited_funds'] = isset($data['debited_funds']) ? $data['debited_funds'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['credited_wallet_id'] === null) {
            $invalidProperties[] = "'credited_wallet_id' can't be null";
        }
        if ($this->container['success_url'] === null) {
            $invalidProperties[] = "'success_url' can't be null";
        }
        if ($this->container['cancel_url'] === null) {
            $invalidProperties[] = "'cancel_url' can't be null";
        }
        if ($this->container['debited_funds'] === null) {
            $invalidProperties[] = "'debited_funds' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalidProperties[] = "'fees' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
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
     * Gets save_card
     *
     * @return bool
     */
    public function getSaveCard()
    {
        return $this->container['save_card'];
    }

    /**
     * Sets save_card
     *
     * @param bool $save_card Whether to save or not the card for future use. SaveCard and CardId are mutually exclusive
     *
     * @return $this
     */
    public function setSaveCard($save_card)
    {
        $this->container['save_card'] = $save_card;

        return $this;
    }

    /**
     * Gets card_id
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string $card_id The id of a previous saved card. SaveCard and CardId are mutually exclusive
     *
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets credited_wallet_id
     *
     * @return string
     */
    public function getCreditedWalletId()
    {
        return $this->container['credited_wallet_id'];
    }

    /**
     * Sets credited_wallet_id
     *
     * @param string $credited_wallet_id The ID of the wallet where money will be credited
     *
     * @return $this
     */
    public function setCreditedWalletId($credited_wallet_id)
    {
        $this->container['credited_wallet_id'] = $credited_wallet_id;

        return $this;
    }

    /**
     * Gets statement_descriptor
     *
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param string $statement_descriptor A custom description to appear on the user's bank statement. It can be up to 10 characters long, and can only include alphanumeric characters or spaces
     *
     * @return $this
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url Dirección (relativa a la tienda) a la que redirigirá cuando se haya completado el pago.
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string $cancel_url Dirección (relativa a la tienda) a la que redirigirá en caso de error en el pago.
     *
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets debited_funds
     *
     * @return \MarketPay\Model\Money
     */
    public function getDebitedFunds()
    {
        return $this->container['debited_funds'];
    }

    /**
     * Sets debited_funds
     *
     * @param \MarketPay\Model\Money $debited_funds debited_funds
     *
     * @return $this
     */
    public function setDebitedFunds($debited_funds)
    {
        $this->container['debited_funds'] = $debited_funds;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \MarketPay\Model\Money
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \MarketPay\Model\Money $fees fees
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Valid values are ES, EN, CA, FR, DE, NL, IT, SV, PT, PL, GL and EU
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

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


