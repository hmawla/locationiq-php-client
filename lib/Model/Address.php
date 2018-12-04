<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LocationIQ
 *
 * LocationIQ provides flexible enterprise-grade location based solutions. We work with developers, startups and enterprises worldwide serving billions of requests everyday. This page provides an overview of the technical aspects of our API and will help you get started.
 *
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LocationIq\Model;

use \ArrayAccess;
use \LocationIq\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'house_number' => 'string',
        'road' => 'string',
        'residential' => 'string',
        'borough' => 'string',
        'neighbourhood' => 'string',
        'quarter' => 'string',
        'hamlet' => 'string',
        'suburb' => 'string',
        'island' => 'string',
        'village' => 'string',
        'town' => 'string',
        'city' => 'string',
        'city_district' => 'string',
        'county' => 'string',
        'state' => 'string',
        'state_district' => 'string',
        'postcode' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'state_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'house_number' => null,
        'road' => null,
        'residential' => null,
        'borough' => null,
        'neighbourhood' => null,
        'quarter' => null,
        'hamlet' => null,
        'suburb' => null,
        'island' => null,
        'village' => null,
        'town' => null,
        'city' => null,
        'city_district' => null,
        'county' => null,
        'state' => null,
        'state_district' => null,
        'postcode' => null,
        'country' => null,
        'country_code' => null,
        'state_code' => null
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
        'house_number' => 'house_number',
        'road' => 'road',
        'residential' => 'residential',
        'borough' => 'borough',
        'neighbourhood' => 'neighbourhood',
        'quarter' => 'quarter',
        'hamlet' => 'hamlet',
        'suburb' => 'suburb',
        'island' => 'island',
        'village' => 'village',
        'town' => 'town',
        'city' => 'city',
        'city_district' => 'city_district',
        'county' => 'county',
        'state' => 'state',
        'state_district' => 'state_district',
        'postcode' => 'postcode',
        'country' => 'country',
        'country_code' => 'country_code',
        'state_code' => 'state_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'house_number' => 'setHouseNumber',
        'road' => 'setRoad',
        'residential' => 'setResidential',
        'borough' => 'setBorough',
        'neighbourhood' => 'setNeighbourhood',
        'quarter' => 'setQuarter',
        'hamlet' => 'setHamlet',
        'suburb' => 'setSuburb',
        'island' => 'setIsland',
        'village' => 'setVillage',
        'town' => 'setTown',
        'city' => 'setCity',
        'city_district' => 'setCityDistrict',
        'county' => 'setCounty',
        'state' => 'setState',
        'state_district' => 'setStateDistrict',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'state_code' => 'setStateCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'house_number' => 'getHouseNumber',
        'road' => 'getRoad',
        'residential' => 'getResidential',
        'borough' => 'getBorough',
        'neighbourhood' => 'getNeighbourhood',
        'quarter' => 'getQuarter',
        'hamlet' => 'getHamlet',
        'suburb' => 'getSuburb',
        'island' => 'getIsland',
        'village' => 'getVillage',
        'town' => 'getTown',
        'city' => 'getCity',
        'city_district' => 'getCityDistrict',
        'county' => 'getCounty',
        'state' => 'getState',
        'state_district' => 'getStateDistrict',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'state_code' => 'getStateCode'
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
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['road'] = isset($data['road']) ? $data['road'] : null;
        $this->container['residential'] = isset($data['residential']) ? $data['residential'] : null;
        $this->container['borough'] = isset($data['borough']) ? $data['borough'] : null;
        $this->container['neighbourhood'] = isset($data['neighbourhood']) ? $data['neighbourhood'] : null;
        $this->container['quarter'] = isset($data['quarter']) ? $data['quarter'] : null;
        $this->container['hamlet'] = isset($data['hamlet']) ? $data['hamlet'] : null;
        $this->container['suburb'] = isset($data['suburb']) ? $data['suburb'] : null;
        $this->container['island'] = isset($data['island']) ? $data['island'] : null;
        $this->container['village'] = isset($data['village']) ? $data['village'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['city_district'] = isset($data['city_district']) ? $data['city_district'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['state_district'] = isset($data['state_district']) ? $data['state_district'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
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
     * Gets house_number
     *
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string|null $house_number house_number
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets road
     *
     * @return string|null
     */
    public function getRoad()
    {
        return $this->container['road'];
    }

    /**
     * Sets road
     *
     * @param string|null $road road
     *
     * @return $this
     */
    public function setRoad($road)
    {
        $this->container['road'] = $road;

        return $this;
    }

    /**
     * Gets residential
     *
     * @return string|null
     */
    public function getResidential()
    {
        return $this->container['residential'];
    }

    /**
     * Sets residential
     *
     * @param string|null $residential residential
     *
     * @return $this
     */
    public function setResidential($residential)
    {
        $this->container['residential'] = $residential;

        return $this;
    }

    /**
     * Gets borough
     *
     * @return string|null
     */
    public function getBorough()
    {
        return $this->container['borough'];
    }

    /**
     * Sets borough
     *
     * @param string|null $borough borough
     *
     * @return $this
     */
    public function setBorough($borough)
    {
        $this->container['borough'] = $borough;

        return $this;
    }

    /**
     * Gets neighbourhood
     *
     * @return string|null
     */
    public function getNeighbourhood()
    {
        return $this->container['neighbourhood'];
    }

    /**
     * Sets neighbourhood
     *
     * @param string|null $neighbourhood neighbourhood
     *
     * @return $this
     */
    public function setNeighbourhood($neighbourhood)
    {
        $this->container['neighbourhood'] = $neighbourhood;

        return $this;
    }

    /**
     * Gets quarter
     *
     * @return string|null
     */
    public function getQuarter()
    {
        return $this->container['quarter'];
    }

    /**
     * Sets quarter
     *
     * @param string|null $quarter quarter
     *
     * @return $this
     */
    public function setQuarter($quarter)
    {
        $this->container['quarter'] = $quarter;

        return $this;
    }

    /**
     * Gets hamlet
     *
     * @return string|null
     */
    public function getHamlet()
    {
        return $this->container['hamlet'];
    }

    /**
     * Sets hamlet
     *
     * @param string|null $hamlet hamlet
     *
     * @return $this
     */
    public function setHamlet($hamlet)
    {
        $this->container['hamlet'] = $hamlet;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string|null
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string|null $suburb suburb
     *
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets island
     *
     * @return string|null
     */
    public function getIsland()
    {
        return $this->container['island'];
    }

    /**
     * Sets island
     *
     * @param string|null $island island
     *
     * @return $this
     */
    public function setIsland($island)
    {
        $this->container['island'] = $island;

        return $this;
    }

    /**
     * Gets village
     *
     * @return string|null
     */
    public function getVillage()
    {
        return $this->container['village'];
    }

    /**
     * Sets village
     *
     * @param string|null $village village
     *
     * @return $this
     */
    public function setVillage($village)
    {
        $this->container['village'] = $village;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string|null
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string|null $town town
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets city_district
     *
     * @return string|null
     */
    public function getCityDistrict()
    {
        return $this->container['city_district'];
    }

    /**
     * Sets city_district
     *
     * @param string|null $city_district city_district
     *
     * @return $this
     */
    public function setCityDistrict($city_district)
    {
        $this->container['city_district'] = $city_district;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county county
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_district
     *
     * @return string|null
     */
    public function getStateDistrict()
    {
        return $this->container['state_district'];
    }

    /**
     * Sets state_district
     *
     * @param string|null $state_district state_district
     *
     * @return $this
     */
    public function setStateDistrict($state_district)
    {
        $this->container['state_district'] = $state_district;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string|null $state_code state_code
     *
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

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
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


