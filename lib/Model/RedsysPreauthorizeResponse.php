<?php
/**
 * RedsysPreauthorizeResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * RedsysPreauthorizeResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RedsysPreauthorizeResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RedsysPreauthorizeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debited_funds' => '\Swagger\Client\Model\Money',
        'status' => 'string',
        'payment_status' => 'string',
        'execution_date' => 'int',
        'result_code' => 'string',
        'result_message' => 'string',
        'execution_type' => 'string',
        'card_id' => 'string',
        'statement_descriptor' => 'string',
        'author_id' => 'string',
        'pay_in_id' => 'string',
        'provider' => '\Swagger\Client\Model\PreauthorizationRedsysData',
        'id' => 'string',
        'creation_date' => 'int',
        'tag' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'debited_funds' => 'DebitedFunds',
        'status' => 'Status',
        'payment_status' => 'PaymentStatus',
        'execution_date' => 'ExecutionDate',
        'result_code' => 'ResultCode',
        'result_message' => 'ResultMessage',
        'execution_type' => 'ExecutionType',
        'card_id' => 'CardId',
        'statement_descriptor' => 'StatementDescriptor',
        'author_id' => 'AuthorId',
        'pay_in_id' => 'PayInId',
        'provider' => 'Provider',
        'id' => 'Id',
        'creation_date' => 'CreationDate',
        'tag' => 'Tag'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'debited_funds' => 'setDebitedFunds',
        'status' => 'setStatus',
        'payment_status' => 'setPaymentStatus',
        'execution_date' => 'setExecutionDate',
        'result_code' => 'setResultCode',
        'result_message' => 'setResultMessage',
        'execution_type' => 'setExecutionType',
        'card_id' => 'setCardId',
        'statement_descriptor' => 'setStatementDescriptor',
        'author_id' => 'setAuthorId',
        'pay_in_id' => 'setPayInId',
        'provider' => 'setProvider',
        'id' => 'setId',
        'creation_date' => 'setCreationDate',
        'tag' => 'setTag'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'debited_funds' => 'getDebitedFunds',
        'status' => 'getStatus',
        'payment_status' => 'getPaymentStatus',
        'execution_date' => 'getExecutionDate',
        'result_code' => 'getResultCode',
        'result_message' => 'getResultMessage',
        'execution_type' => 'getExecutionType',
        'card_id' => 'getCardId',
        'statement_descriptor' => 'getStatementDescriptor',
        'author_id' => 'getAuthorId',
        'pay_in_id' => 'getPayInId',
        'provider' => 'getProvider',
        'id' => 'getId',
        'creation_date' => 'getCreationDate',
        'tag' => 'getTag'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_CREATED = 'CREATED';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED = 'FAILED';
    const PAYMENT_STATUS_NOT_SPECIFIED = 'NotSpecified';
    const PAYMENT_STATUS_WAITING = 'WAITING';
    const PAYMENT_STATUS_CANCELED = 'CANCELED';
    const PAYMENT_STATUS_EXPIRED = 'EXPIRED';
    const PAYMENT_STATUS_VALIDATED = 'VALIDATED';
    const EXECUTION_TYPE_NOT_SPECIFIED = 'NotSpecified';
    const EXECUTION_TYPE_WEB = 'WEB';
    const EXECUTION_TYPE_DIRECT = 'DIRECT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_NOT_SPECIFIED,
            self::PAYMENT_STATUS_WAITING,
            self::PAYMENT_STATUS_CANCELED,
            self::PAYMENT_STATUS_EXPIRED,
            self::PAYMENT_STATUS_VALIDATED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getExecutionTypeAllowableValues()
    {
        return [
            self::EXECUTION_TYPE_NOT_SPECIFIED,
            self::EXECUTION_TYPE_WEB,
            self::EXECUTION_TYPE_DIRECT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['debited_funds'] = isset($data['debited_funds']) ? $data['debited_funds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['execution_date'] = isset($data['execution_date']) ? $data['execution_date'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['result_message'] = isset($data['result_message']) ? $data['result_message'] : null;
        $this->container['execution_type'] = isset($data['execution_type']) ? $data['execution_type'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['statement_descriptor'] = isset($data['statement_descriptor']) ? $data['statement_descriptor'] : null;
        $this->container['author_id'] = isset($data['author_id']) ? $data['author_id'] : null;
        $this->container['pay_in_id'] = isset($data['pay_in_id']) ? $data['pay_in_id'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["CREATED", "SUCCEEDED", "FAILED"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'CREATED', 'SUCCEEDED', 'FAILED'.";
        }

        $allowed_values = ["NotSpecified", "WAITING", "CANCELED", "EXPIRED", "VALIDATED"];
        if (!in_array($this->container['payment_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'payment_status', must be one of 'NotSpecified', 'WAITING', 'CANCELED', 'EXPIRED', 'VALIDATED'.";
        }

        $allowed_values = ["NotSpecified", "WEB", "DIRECT"];
        if (!in_array($this->container['execution_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'execution_type', must be one of 'NotSpecified', 'WEB', 'DIRECT'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["CREATED", "SUCCEEDED", "FAILED"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["NotSpecified", "WAITING", "CANCELED", "EXPIRED", "VALIDATED"];
        if (!in_array($this->container['payment_status'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["NotSpecified", "WEB", "DIRECT"];
        if (!in_array($this->container['execution_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets debited_funds
     * @return \Swagger\Client\Model\Money
     */
    public function getDebitedFunds()
    {
        return $this->container['debited_funds'];
    }

    /**
     * Sets debited_funds
     * @param \Swagger\Client\Model\Money $debited_funds Information about the funds that are being debited
     * @return $this
     */
    public function setDebitedFunds($debited_funds)
    {
        $this->container['debited_funds'] = $debited_funds;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the transaction
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('CREATED', 'SUCCEEDED', 'FAILED');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'CREATED', 'SUCCEEDED', 'FAILED'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_status
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     * @param string $payment_status Status of the payment
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowed_values = array('NotSpecified', 'WAITING', 'CANCELED', 'EXPIRED', 'VALIDATED');
        if (!is_null($payment_status) && (!in_array($payment_status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'payment_status', must be one of 'NotSpecified', 'WAITING', 'CANCELED', 'EXPIRED', 'VALIDATED'");
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets execution_date
     * @return int
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     * @param int $execution_date When the transaction happened
     * @return $this
     */
    public function setExecutionDate($execution_date)
    {
        $this->container['execution_date'] = $execution_date;

        return $this;
    }

    /**
     * Gets result_code
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     * @param string $result_code The result code
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets result_message
     * @return string
     */
    public function getResultMessage()
    {
        return $this->container['result_message'];
    }

    /**
     * Sets result_message
     * @param string $result_message A verbal explanation of the ResultCode
     * @return $this
     */
    public function setResultMessage($result_message)
    {
        $this->container['result_message'] = $result_message;

        return $this;
    }

    /**
     * Gets execution_type
     * @return string
     */
    public function getExecutionType()
    {
        return $this->container['execution_type'];
    }

    /**
     * Sets execution_type
     * @param string $execution_type The type of execution for the payin
     * @return $this
     */
    public function setExecutionType($execution_type)
    {
        $allowed_values = array('NotSpecified', 'WEB', 'DIRECT');
        if (!is_null($execution_type) && (!in_array($execution_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'execution_type', must be one of 'NotSpecified', 'WEB', 'DIRECT'");
        }
        $this->container['execution_type'] = $execution_type;

        return $this;
    }

    /**
     * Gets card_id
     * @return string
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     * @param string $card_id The Id of the card saved, if any.
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets statement_descriptor
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     * @param string $statement_descriptor A custom description to appear on the user's bank statement. It can be up to 10 characters long, and can only include alphanumeric characters or spaces
     * @return $this
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }

    /**
     * Gets author_id
     * @return string
     */
    public function getAuthorId()
    {
        return $this->container['author_id'];
    }

    /**
     * Sets author_id
     * @param string $author_id A user's ID
     * @return $this
     */
    public function setAuthorId($author_id)
    {
        $this->container['author_id'] = $author_id;

        return $this;
    }

    /**
     * Gets pay_in_id
     * @return string
     */
    public function getPayInId()
    {
        return $this->container['pay_in_id'];
    }

    /**
     * Sets pay_in_id
     * @param string $pay_in_id The Id of the associated PayIn
     * @return $this
     */
    public function setPayInId($pay_in_id)
    {
        $this->container['pay_in_id'] = $pay_in_id;

        return $this;
    }

    /**
     * Gets provider
     * @return \Swagger\Client\Model\PreauthorizationRedsysData
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param \Swagger\Client\Model\PreauthorizationRedsysData $provider Redsys related data
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets creation_date
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     * @param int $creation_date
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


