<?php
/**
 * Company
 *
 * PHP version 5
 *
 * @category Class
 * @package  Introvert
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * INTROVERT API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Introvert\Model;

use \ArrayAccess;

/**
 * Company Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Introvert
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Company implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'crm_user_id' => 'int',
        'phone' => 'string',
        'mail' => 'string',
        'linked_leads_id' => 'int[]',
        'custom_fields' => 'object',
        'tags' => 'string',
        'date_create' => 'int',
        'last_modified' => 'int'
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
        'id' => 'id',
        'name' => 'name',
        'crm_user_id' => 'crm_user_id',
        'phone' => 'phone',
        'mail' => 'mail',
        'linked_leads_id' => 'linked_leads_id',
        'custom_fields' => 'custom_fields',
        'tags' => 'tags',
        'date_create' => 'date_create',
        'last_modified' => 'last_modified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'crm_user_id' => 'setCrmUserId',
        'phone' => 'setPhone',
        'mail' => 'setMail',
        'linked_leads_id' => 'setLinkedLeadsId',
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags',
        'date_create' => 'setDateCreate',
        'last_modified' => 'setLastModified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'crm_user_id' => 'getCrmUserId',
        'phone' => 'getPhone',
        'mail' => 'getMail',
        'linked_leads_id' => 'getLinkedLeadsId',
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags',
        'date_create' => 'getDateCreate',
        'last_modified' => 'getLastModified'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['crm_user_id'] = isset($data['crm_user_id']) ? $data['crm_user_id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['linked_leads_id'] = isset($data['linked_leads_id']) ? $data['linked_leads_id'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['date_create'] = isset($data['date_create']) ? $data['date_create'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id id компании
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets crm_user_id
     * @return int
     */
    public function getCrmUserId()
    {
        return $this->container['crm_user_id'];
    }

    /**
     * Sets crm_user_id
     * @param int $crm_user_id id ответственного
     * @return $this
     */
    public function setCrmUserId($crm_user_id)
    {
        $this->container['crm_user_id'] = $crm_user_id;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone телефон компании
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mail
     * @return string
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     * @param string $mail email компании
     * @return $this
     */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets linked_leads_id
     * @return int[]
     */
    public function getLinkedLeadsId()
    {
        return $this->container['linked_leads_id'];
    }

    /**
     * Sets linked_leads_id
     * @param int[] $linked_leads_id id сделки
     * @return $this
     */
    public function setLinkedLeadsId($linked_leads_id)
    {
        $this->container['linked_leads_id'] = $linked_leads_id;

        return $this;
    }

    /**
     * Gets custom_fields
     * @return object | array
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     * @param object | array $custom_fields пользовательские поля, объект вида {id: value, id: [value, ...]}
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets tags
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string $tags 
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets date_create
     * @return int
     */
    public function getDateCreate()
    {
        return $this->container['date_create'];
    }

    /**
     * Sets date_create
     * @param int $date_create 
     * @return $this
     */
    public function setDateCreate($date_create)
    {
        $this->container['date_create'] = $date_create;

        return $this;
    }

    /**
     * Gets last_modified
     * @return int
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     * @param int $last_modified 
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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
            return json_encode(\Introvert\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Introvert\ObjectSerializer::sanitizeForSerialization($this));
    }
}


