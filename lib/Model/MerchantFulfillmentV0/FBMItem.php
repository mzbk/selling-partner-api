<?php
/**
 * FBMItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FBMItem Class Doc Comment
 *
 * @category Class
 * @description An Amazon order item identifier and a quantity.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FBMItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FBMItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_item_id' => 'string',
        'quantity' => 'int',
        'item_weight' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\Weight',
        'item_description' => 'string',
        'transparency_code_list' => 'string[]',
        'item_level_seller_inputs_list' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\AdditionalSellerInputs[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_item_id' => null,
        'quantity' => 'int32',
        'item_weight' => null,
        'item_description' => null,
        'transparency_code_list' => null,
        'item_level_seller_inputs_list' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_item_id' => 'OrderItemId',
        'quantity' => 'Quantity',
        'item_weight' => 'ItemWeight',
        'item_description' => 'ItemDescription',
        'transparency_code_list' => 'TransparencyCodeList',
        'item_level_seller_inputs_list' => 'ItemLevelSellerInputsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'order_item_id' => 'setOrderItemId',
        'quantity' => 'setQuantity',
        'item_weight' => 'setItemWeight',
        'item_description' => 'setItemDescription',
        'transparency_code_list' => 'setTransparencyCodeList',
        'item_level_seller_inputs_list' => 'setItemLevelSellerInputsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_item_id' => 'getOrderItemId',
        'quantity' => 'getQuantity',
        'item_weight' => 'getItemWeight',
        'item_description' => 'getItemDescription',
        'transparency_code_list' => 'getTransparencyCodeList',
        'item_level_seller_inputs_list' => 'getItemLevelSellerInputsList'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['item_weight'] = $data['item_weight'] ?? null;
        $this->container['item_description'] = $data['item_description'] ?? null;
        $this->container['transparency_code_list'] = $data['transparency_code_list'] ?? null;
        $this->container['item_level_seller_inputs_list'] = $data['item_level_seller_inputs_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_item_id'] === null) {
            $invalidProperties[] = "'order_item_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets order_item_id
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string $order_item_id An Amazon-defined identifier for an individual item in an order.
     *
     * @return self
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The number of items.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Gets item_weight
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\Weight|null
     */
    public function getItemWeight()
    {
        return $this->container['item_weight'];
    }

    /**
     * Sets item_weight
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\Weight|null $item_weight item_weight
     *
     * @return self
     */
    public function setItemWeight($item_weight)
    {
        $this->container['item_weight'] = $item_weight;

        return $this;
    }
    /**
     * Gets item_description
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string|null $item_description The description of the item.
     *
     * @return self
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }
    /**
     * Gets transparency_code_list
     *
     * @return string[]|null
     */
    public function getTransparencyCodeList()
    {
        return $this->container['transparency_code_list'];
    }

    /**
     * Sets transparency_code_list
     *
     * @param string[]|null $transparency_code_list A list of transparency codes.
     *
     * @return self
     */
    public function setTransparencyCodeList($transparency_code_list)
    {
        $this->container['transparency_code_list'] = $transparency_code_list;

        return $this;
    }
    /**
     * Gets item_level_seller_inputs_list
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\AdditionalSellerInputs[]|null
     */
    public function getItemLevelSellerInputsList()
    {
        return $this->container['item_level_seller_inputs_list'];
    }

    /**
     * Sets item_level_seller_inputs_list
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\AdditionalSellerInputs[]|null $item_level_seller_inputs_list A list of additional seller input pairs required to purchase shipping.
     *
     * @return self
     */
    public function setItemLevelSellerInputsList($item_level_seller_inputs_list)
    {
        $this->container['item_level_seller_inputs_list'] = $item_level_seller_inputs_list;

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


