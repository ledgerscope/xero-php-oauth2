<?php
/**
 * Item
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.3.3
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Item Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Item implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'inventory_asset_account_code' => 'string',
        'name' => 'string',
        'is_sold' => 'bool',
        'is_purchased' => 'bool',
        'description' => 'string',
        'purchase_description' => 'string',
        'purchase_details' => '\XeroAPI\XeroPHP\Models\Accounting\Purchase',
        'sales_details' => '\XeroAPI\XeroPHP\Models\Accounting\Purchase',
        'is_tracked_as_inventory' => 'bool',
        'total_cost_pool' => 'double',
        'quantity_on_hand' => 'double',
        'updated_date_utc' => 'string',
        'item_id' => 'string',
        'status_attribute_string' => 'string',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'code' => null,
        'inventory_asset_account_code' => null,
        'name' => null,
        'is_sold' => null,
        'is_purchased' => null,
        'description' => null,
        'purchase_description' => null,
        'purchase_details' => null,
        'sales_details' => null,
        'is_tracked_as_inventory' => null,
        'total_cost_pool' => 'double',
        'quantity_on_hand' => 'double',
        'updated_date_utc' => null,
        'item_id' => 'uuid',
        'status_attribute_string' => null,
        'validation_errors' => null
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
        'code' => 'Code',
        'inventory_asset_account_code' => 'InventoryAssetAccountCode',
        'name' => 'Name',
        'is_sold' => 'IsSold',
        'is_purchased' => 'IsPurchased',
        'description' => 'Description',
        'purchase_description' => 'PurchaseDescription',
        'purchase_details' => 'PurchaseDetails',
        'sales_details' => 'SalesDetails',
        'is_tracked_as_inventory' => 'IsTrackedAsInventory',
        'total_cost_pool' => 'TotalCostPool',
        'quantity_on_hand' => 'QuantityOnHand',
        'updated_date_utc' => 'UpdatedDateUTC',
        'item_id' => 'ItemID',
        'status_attribute_string' => 'StatusAttributeString',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'inventory_asset_account_code' => 'setInventoryAssetAccountCode',
        'name' => 'setName',
        'is_sold' => 'setIsSold',
        'is_purchased' => 'setIsPurchased',
        'description' => 'setDescription',
        'purchase_description' => 'setPurchaseDescription',
        'purchase_details' => 'setPurchaseDetails',
        'sales_details' => 'setSalesDetails',
        'is_tracked_as_inventory' => 'setIsTrackedAsInventory',
        'total_cost_pool' => 'setTotalCostPool',
        'quantity_on_hand' => 'setQuantityOnHand',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'item_id' => 'setItemId',
        'status_attribute_string' => 'setStatusAttributeString',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'inventory_asset_account_code' => 'getInventoryAssetAccountCode',
        'name' => 'getName',
        'is_sold' => 'getIsSold',
        'is_purchased' => 'getIsPurchased',
        'description' => 'getDescription',
        'purchase_description' => 'getPurchaseDescription',
        'purchase_details' => 'getPurchaseDetails',
        'sales_details' => 'getSalesDetails',
        'is_tracked_as_inventory' => 'getIsTrackedAsInventory',
        'total_cost_pool' => 'getTotalCostPool',
        'quantity_on_hand' => 'getQuantityOnHand',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'item_id' => 'getItemId',
        'status_attribute_string' => 'getStatusAttributeString',
        'validation_errors' => 'getValidationErrors'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['inventory_asset_account_code'] = isset($data['inventory_asset_account_code']) ? $data['inventory_asset_account_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_sold'] = isset($data['is_sold']) ? $data['is_sold'] : null;
        $this->container['is_purchased'] = isset($data['is_purchased']) ? $data['is_purchased'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['purchase_description'] = isset($data['purchase_description']) ? $data['purchase_description'] : null;
        $this->container['purchase_details'] = isset($data['purchase_details']) ? $data['purchase_details'] : null;
        $this->container['sales_details'] = isset($data['sales_details']) ? $data['sales_details'] : null;
        $this->container['is_tracked_as_inventory'] = isset($data['is_tracked_as_inventory']) ? $data['is_tracked_as_inventory'] : null;
        $this->container['total_cost_pool'] = isset($data['total_cost_pool']) ? $data['total_cost_pool'] : null;
        $this->container['quantity_on_hand'] = isset($data['quantity_on_hand']) ? $data['quantity_on_hand'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['status_attribute_string'] = isset($data['status_attribute_string']) ? $data['status_attribute_string'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) > 30)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['purchase_description']) && (mb_strlen($this->container['purchase_description']) > 4000)) {
            $invalidProperties[] = "invalid value for 'purchase_description', the character length must be smaller than or equal to 4000.";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code User defined item code (max length = 30)
     *
     * @return $this
     */
    public function setCode($code)
    {
        if ((mb_strlen($code) > 30)) {
            throw new \InvalidArgumentException('invalid length for $code when calling Item., must be smaller than or equal to 30.');
        }


        $this->container['code'] = $code;

        return $this;
    }



    /**
     * Gets inventory_asset_account_code
     *
     * @return string|null
     */
    public function getInventoryAssetAccountCode()
    {
        return $this->container['inventory_asset_account_code'];
    }

    /**
     * Sets inventory_asset_account_code
     *
     * @param string|null $inventory_asset_account_code The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     *
     * @return $this
     */
    public function setInventoryAssetAccountCode($inventory_asset_account_code)
    {

        $this->container['inventory_asset_account_code'] = $inventory_asset_account_code;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the item (max length = 50)
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Item., must be smaller than or equal to 50.');
        }


        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets is_sold
     *
     * @return bool|null
     */
    public function getIsSold()
    {
        return $this->container['is_sold'];
    }

    /**
     * Sets is_sold
     *
     * @param bool|null $is_sold Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     *
     * @return $this
     */
    public function setIsSold($is_sold)
    {

        $this->container['is_sold'] = $is_sold;

        return $this;
    }



    /**
     * Gets is_purchased
     *
     * @return bool|null
     */
    public function getIsPurchased()
    {
        return $this->container['is_purchased'];
    }

    /**
     * Sets is_purchased
     *
     * @param bool|null $is_purchased Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     *
     * @return $this
     */
    public function setIsPurchased($is_purchased)
    {

        $this->container['is_purchased'] = $is_purchased;

        return $this;
    }



    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The sales description of the item (max length = 4000)
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Item., must be smaller than or equal to 4000.');
        }


        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets purchase_description
     *
     * @return string|null
     */
    public function getPurchaseDescription()
    {
        return $this->container['purchase_description'];
    }

    /**
     * Sets purchase_description
     *
     * @param string|null $purchase_description The purchase description of the item (max length = 4000)
     *
     * @return $this
     */
    public function setPurchaseDescription($purchase_description)
    {
        if (!is_null($purchase_description) && (mb_strlen($purchase_description) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $purchase_description when calling Item., must be smaller than or equal to 4000.');
        }


        $this->container['purchase_description'] = $purchase_description;

        return $this;
    }



    /**
     * Gets purchase_details
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Purchase|null
     */
    public function getPurchaseDetails()
    {
        return $this->container['purchase_details'];
    }

    /**
     * Sets purchase_details
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Purchase|null $purchase_details purchase_details
     *
     * @return $this
     */
    public function setPurchaseDetails($purchase_details)
    {

        $this->container['purchase_details'] = $purchase_details;

        return $this;
    }



    /**
     * Gets sales_details
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Purchase|null
     */
    public function getSalesDetails()
    {
        return $this->container['sales_details'];
    }

    /**
     * Sets sales_details
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Purchase|null $sales_details sales_details
     *
     * @return $this
     */
    public function setSalesDetails($sales_details)
    {

        $this->container['sales_details'] = $sales_details;

        return $this;
    }



    /**
     * Gets is_tracked_as_inventory
     *
     * @return bool|null
     */
    public function getIsTrackedAsInventory()
    {
        return $this->container['is_tracked_as_inventory'];
    }

    /**
     * Sets is_tracked_as_inventory
     *
     * @param bool|null $is_tracked_as_inventory True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     *
     * @return $this
     */
    public function setIsTrackedAsInventory($is_tracked_as_inventory)
    {

        $this->container['is_tracked_as_inventory'] = $is_tracked_as_inventory;

        return $this;
    }



    /**
     * Gets total_cost_pool
     *
     * @return double|null
     */
    public function getTotalCostPool()
    {
        return $this->container['total_cost_pool'];
    }

    /**
     * Sets total_cost_pool
     *
     * @param double|null $total_cost_pool The value of the item on hand. Calculated using average cost accounting.
     *
     * @return $this
     */
    public function setTotalCostPool($total_cost_pool)
    {

        $this->container['total_cost_pool'] = $total_cost_pool;

        return $this;
    }



    /**
     * Gets quantity_on_hand
     *
     * @return double|null
     */
    public function getQuantityOnHand()
    {
        return $this->container['quantity_on_hand'];
    }

    /**
     * Sets quantity_on_hand
     *
     * @param double|null $quantity_on_hand The quantity of the item on hand
     *
     * @return $this
     */
    public function setQuantityOnHand($quantity_on_hand)
    {

        $this->container['quantity_on_hand'] = $quantity_on_hand;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified date in UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id The Xero identifier for an Item
     *
     * @return $this
     */
    public function setItemId($item_id)
    {

        $this->container['item_id'] = $item_id;

        return $this;
    }



    /**
     * Gets status_attribute_string
     *
     * @return string|null
     */
    public function getStatusAttributeString()
    {
        return $this->container['status_attribute_string'];
    }

    /**
     * Sets status_attribute_string
     *
     * @param string|null $status_attribute_string Status of object
     *
     * @return $this
     */
    public function setStatusAttributeString($status_attribute_string)
    {

        $this->container['status_attribute_string'] = $status_attribute_string;

        return $this;
    }



    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

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
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


