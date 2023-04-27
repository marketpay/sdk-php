<?php
/**
 * EventResponse
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
 * Swagger Codegen version: 2.4.31
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
 * EventResponse Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EventResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'resource_id' => 'string',
        'event_type' => 'string',
        'date' => 'int',
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
        'resource_id' => null,
        'event_type' => null,
        'date' => 'int64',
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
        'resource_id' => 'ResourceId',
        'event_type' => 'EventType',
        'date' => 'Date',
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
        'resource_id' => 'setResourceId',
        'event_type' => 'setEventType',
        'date' => 'setDate',
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
        'resource_id' => 'getResourceId',
        'event_type' => 'getEventType',
        'date' => 'getDate',
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

    const EVENT_TYPE_ALL = 'All';
    const EVENT_TYPE_PAYIN_NORMAL_CREATED = 'PAYIN_NORMAL_CREATED';
    const EVENT_TYPE_PAYIN_NORMAL_SUCCEEDED = 'PAYIN_NORMAL_SUCCEEDED';
    const EVENT_TYPE_PAYIN_NORMAL_FAILED = 'PAYIN_NORMAL_FAILED';
    const EVENT_TYPE_PAYOUT_NORMAL_CREATED = 'PAYOUT_NORMAL_CREATED';
    const EVENT_TYPE_PAYOUT_NORMAL_SUCCEEDED = 'PAYOUT_NORMAL_SUCCEEDED';
    const EVENT_TYPE_PAYOUT_NORMAL_FAILED = 'PAYOUT_NORMAL_FAILED';
    const EVENT_TYPE_TRANSFER_NORMAL_CREATED = 'TRANSFER_NORMAL_CREATED';
    const EVENT_TYPE_TRANSFER_NORMAL_SUCCEEDED = 'TRANSFER_NORMAL_SUCCEEDED';
    const EVENT_TYPE_TRANSFER_NORMAL_FAILED = 'TRANSFER_NORMAL_FAILED';
    const EVENT_TYPE_PAYIN_REFUND_CREATED = 'PAYIN_REFUND_CREATED';
    const EVENT_TYPE_PAYIN_REFUND_SUCCEEDED = 'PAYIN_REFUND_SUCCEEDED';
    const EVENT_TYPE_PAYIN_REFUND_FAILED = 'PAYIN_REFUND_FAILED';
    const EVENT_TYPE_PAYOUT_REFUND_CREATED = 'PAYOUT_REFUND_CREATED';
    const EVENT_TYPE_PAYOUT_REFUND_SUCCEEDED = 'PAYOUT_REFUND_SUCCEEDED';
    const EVENT_TYPE_PAYOUT_REFUND_FAILED = 'PAYOUT_REFUND_FAILED';
    const EVENT_TYPE_TRANSFER_REFUND_CREATED = 'TRANSFER_REFUND_CREATED';
    const EVENT_TYPE_TRANSFER_REFUND_SUCCEEDED = 'TRANSFER_REFUND_SUCCEEDED';
    const EVENT_TYPE_TRANSFER_REFUND_FAILED = 'TRANSFER_REFUND_FAILED';
    const EVENT_TYPE_KYC_CREATED = 'KYC_CREATED';
    const EVENT_TYPE_KYC_VALIDATION_ASKED = 'KYC_VALIDATION_ASKED';
    const EVENT_TYPE_KYC_SUCCEEDED = 'KYC_SUCCEEDED';
    const EVENT_TYPE_KYC_FAILED = 'KYC_FAILED';
    const EVENT_TYPE_PAYIN_REPUDIATION_CREATED = 'PAYIN_REPUDIATION_CREATED';
    const EVENT_TYPE_PAYIN_REPUDIATION_SUCCEEDED = 'PAYIN_REPUDIATION_SUCCEEDED';
    const EVENT_TYPE_PAYIN_REPUDIATION_FAILED = 'PAYIN_REPUDIATION_FAILED';
    const EVENT_TYPE_DISPUTE_DOCUMENT_CREATED = 'DISPUTE_DOCUMENT_CREATED';
    const EVENT_TYPE_DISPUTE_DOCUMENT_VALIDATION_ASKED = 'DISPUTE_DOCUMENT_VALIDATION_ASKED';
    const EVENT_TYPE_DISPUTE_DOCUMENT_SUCCEEDED = 'DISPUTE_DOCUMENT_SUCCEEDED';
    const EVENT_TYPE_DISPUTE_DOCUMENT_FAILED = 'DISPUTE_DOCUMENT_FAILED';
    const EVENT_TYPE_DISPUTE_CREATED = 'DISPUTE_CREATED';
    const EVENT_TYPE_DISPUTE_SUBMITTED = 'DISPUTE_SUBMITTED';
    const EVENT_TYPE_DISPUTE_ACTION_REQUIRED = 'DISPUTE_ACTION_REQUIRED';
    const EVENT_TYPE_DISPUTE_FURTHER_ACTION_REQUIRED = 'DISPUTE_FURTHER_ACTION_REQUIRED';
    const EVENT_TYPE_DISPUTE_CLOSED = 'DISPUTE_CLOSED';
    const EVENT_TYPE_DISPUTE_SENT_TO_BANK = 'DISPUTE_SENT_TO_BANK';
    const EVENT_TYPE_TRANSFER_SETTLEMENT_CREATED = 'TRANSFER_SETTLEMENT_CREATED';
    const EVENT_TYPE_TRANSFER_SETTLEMENT_SUCCEEDED = 'TRANSFER_SETTLEMENT_SUCCEEDED';
    const EVENT_TYPE_TRANSFER_SETTLEMENT_FAILED = 'TRANSFER_SETTLEMENT_FAILED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_ALL,
            self::EVENT_TYPE_PAYIN_NORMAL_CREATED,
            self::EVENT_TYPE_PAYIN_NORMAL_SUCCEEDED,
            self::EVENT_TYPE_PAYIN_NORMAL_FAILED,
            self::EVENT_TYPE_PAYOUT_NORMAL_CREATED,
            self::EVENT_TYPE_PAYOUT_NORMAL_SUCCEEDED,
            self::EVENT_TYPE_PAYOUT_NORMAL_FAILED,
            self::EVENT_TYPE_TRANSFER_NORMAL_CREATED,
            self::EVENT_TYPE_TRANSFER_NORMAL_SUCCEEDED,
            self::EVENT_TYPE_TRANSFER_NORMAL_FAILED,
            self::EVENT_TYPE_PAYIN_REFUND_CREATED,
            self::EVENT_TYPE_PAYIN_REFUND_SUCCEEDED,
            self::EVENT_TYPE_PAYIN_REFUND_FAILED,
            self::EVENT_TYPE_PAYOUT_REFUND_CREATED,
            self::EVENT_TYPE_PAYOUT_REFUND_SUCCEEDED,
            self::EVENT_TYPE_PAYOUT_REFUND_FAILED,
            self::EVENT_TYPE_TRANSFER_REFUND_CREATED,
            self::EVENT_TYPE_TRANSFER_REFUND_SUCCEEDED,
            self::EVENT_TYPE_TRANSFER_REFUND_FAILED,
            self::EVENT_TYPE_KYC_CREATED,
            self::EVENT_TYPE_KYC_VALIDATION_ASKED,
            self::EVENT_TYPE_KYC_SUCCEEDED,
            self::EVENT_TYPE_KYC_FAILED,
            self::EVENT_TYPE_PAYIN_REPUDIATION_CREATED,
            self::EVENT_TYPE_PAYIN_REPUDIATION_SUCCEEDED,
            self::EVENT_TYPE_PAYIN_REPUDIATION_FAILED,
            self::EVENT_TYPE_DISPUTE_DOCUMENT_CREATED,
            self::EVENT_TYPE_DISPUTE_DOCUMENT_VALIDATION_ASKED,
            self::EVENT_TYPE_DISPUTE_DOCUMENT_SUCCEEDED,
            self::EVENT_TYPE_DISPUTE_DOCUMENT_FAILED,
            self::EVENT_TYPE_DISPUTE_CREATED,
            self::EVENT_TYPE_DISPUTE_SUBMITTED,
            self::EVENT_TYPE_DISPUTE_ACTION_REQUIRED,
            self::EVENT_TYPE_DISPUTE_FURTHER_ACTION_REQUIRED,
            self::EVENT_TYPE_DISPUTE_CLOSED,
            self::EVENT_TYPE_DISPUTE_SENT_TO_BANK,
            self::EVENT_TYPE_TRANSFER_SETTLEMENT_CREATED,
            self::EVENT_TYPE_TRANSFER_SETTLEMENT_SUCCEEDED,
            self::EVENT_TYPE_TRANSFER_SETTLEMENT_FAILED,
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
        $this->container['resource_id'] = isset($data['resource_id']) ? $data['resource_id'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
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

        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_type', must be one of '%s'",
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
     * Gets resource_id
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string $resource_id resource_id
     *
     * @return $this
     */
    public function setResourceId($resource_id)
    {
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type event_type
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($event_type) && !in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets date
     *
     * @return int
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param int $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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


