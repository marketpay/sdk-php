<?php
/**
 * PayOutBankwirePost
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
 * Swagger Codegen version: 2.4.23
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
 * PayOutBankwirePost Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayOutBankwirePost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayOutBankwirePost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'debited_funds' => '\MarketPay\Model\Money',
        'fees' => '\MarketPay\Model\Money',
        'bank_account_id' => 'string',
        'debited_wallet_id' => 'string',
        'bank_wire_ref' => 'string',
        'webhook' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tag' => null,
        'debited_funds' => null,
        'fees' => null,
        'bank_account_id' => null,
        'debited_wallet_id' => null,
        'bank_wire_ref' => null,
        'webhook' => null
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
        'debited_funds' => 'DebitedFunds',
        'fees' => 'Fees',
        'bank_account_id' => 'BankAccountId',
        'debited_wallet_id' => 'DebitedWalletId',
        'bank_wire_ref' => 'BankWireRef',
        'webhook' => 'Webhook'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'debited_funds' => 'setDebitedFunds',
        'fees' => 'setFees',
        'bank_account_id' => 'setBankAccountId',
        'debited_wallet_id' => 'setDebitedWalletId',
        'bank_wire_ref' => 'setBankWireRef',
        'webhook' => 'setWebhook'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'debited_funds' => 'getDebitedFunds',
        'fees' => 'getFees',
        'bank_account_id' => 'getBankAccountId',
        'debited_wallet_id' => 'getDebitedWalletId',
        'bank_wire_ref' => 'getBankWireRef',
        'webhook' => 'getWebhook'
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['debited_funds'] = isset($data['debited_funds']) ? $data['debited_funds'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['bank_account_id'] = isset($data['bank_account_id']) ? $data['bank_account_id'] : null;
        $this->container['debited_wallet_id'] = isset($data['debited_wallet_id']) ? $data['debited_wallet_id'] : null;
        $this->container['bank_wire_ref'] = isset($data['bank_wire_ref']) ? $data['bank_wire_ref'] : null;
        $this->container['webhook'] = isset($data['webhook']) ? $data['webhook'] : null;
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
     * @param string $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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
     * Gets bank_account_id
     *
     * @return string
     */
    public function getBankAccountId()
    {
        return $this->container['bank_account_id'];
    }

    /**
     * Sets bank_account_id
     *
     * @param string $bank_account_id bank_account_id
     *
     * @return $this
     */
    public function setBankAccountId($bank_account_id)
    {
        $this->container['bank_account_id'] = $bank_account_id;

        return $this;
    }

    /**
     * Gets debited_wallet_id
     *
     * @return string
     */
    public function getDebitedWalletId()
    {
        return $this->container['debited_wallet_id'];
    }

    /**
     * Sets debited_wallet_id
     *
     * @param string $debited_wallet_id debited_wallet_id
     *
     * @return $this
     */
    public function setDebitedWalletId($debited_wallet_id)
    {
        $this->container['debited_wallet_id'] = $debited_wallet_id;

        return $this;
    }

    /**
     * Gets bank_wire_ref
     *
     * @return string
     */
    public function getBankWireRef()
    {
        return $this->container['bank_wire_ref'];
    }

    /**
     * Sets bank_wire_ref
     *
     * @param string $bank_wire_ref bank_wire_ref
     *
     * @return $this
     */
    public function setBankWireRef($bank_wire_ref)
    {
        $this->container['bank_wire_ref'] = $bank_wire_ref;

        return $this;
    }

    /**
     * Gets webhook
     *
     * @return string
     */
    public function getWebhook()
    {
        return $this->container['webhook'];
    }

    /**
     * Sets webhook
     *
     * @param string $webhook webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        $this->container['webhook'] = $webhook;

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


