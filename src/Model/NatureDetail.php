<?php
/**
 * NatureDetail
 *
 * PHP version 8.1
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PokéAPI
 *
 * All the Pokémon data you'll ever need in one place, easily accessible through a modern free open-source RESTful API.  ## What is this?  This is a full RESTful API linked to an extensive database detailing everything about the Pokémon main game series.  We've covered everything from Pokémon to Berry Flavors.  ## Where do I start?  We have awesome [documentation](https://pokeapi.co/docs/v2) on how to use this API. It takes minutes to get started.  This API will always be publicly available and will never require any extensive setup process to consume.  Created by [**Paul Hallett**(]https://github.com/phalt) and other [**PokéAPI contributors***](https://github.com/PokeAPI/pokeapi#contributing) around the world. Pokémon and Pokémon character names are trademarks of Nintendo.
 *
 * The version of the OpenAPI document: 2.7.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * NatureDetail Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class NatureDetail implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NatureDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'decreased_stat' => '\OpenAPI\Client\Model\StatSummary',
        'increased_stat' => '\OpenAPI\Client\Model\StatSummary',
        'likes_flavor' => '\OpenAPI\Client\Model\BerryFlavorSummary',
        'hates_flavor' => '\OpenAPI\Client\Model\BerryFlavorSummary',
        'berries' => '\OpenAPI\Client\Model\BerrySummary[]',
        'pokeathlon_stat_changes' => '\OpenAPI\Client\Model\NatureDetailPokeathlonStatChangesInner[]',
        'move_battle_style_preferences' => '\OpenAPI\Client\Model\NatureBattleStylePreference[]',
        'names' => '\OpenAPI\Client\Model\NatureName[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'decreased_stat' => null,
        'increased_stat' => null,
        'likes_flavor' => null,
        'hates_flavor' => null,
        'berries' => null,
        'pokeathlon_stat_changes' => null,
        'move_battle_style_preferences' => null,
        'names' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'decreased_stat' => false,
        'increased_stat' => false,
        'likes_flavor' => false,
        'hates_flavor' => false,
        'berries' => false,
        'pokeathlon_stat_changes' => false,
        'move_battle_style_preferences' => false,
        'names' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'decreased_stat' => 'decreased_stat',
        'increased_stat' => 'increased_stat',
        'likes_flavor' => 'likes_flavor',
        'hates_flavor' => 'hates_flavor',
        'berries' => 'berries',
        'pokeathlon_stat_changes' => 'pokeathlon_stat_changes',
        'move_battle_style_preferences' => 'move_battle_style_preferences',
        'names' => 'names'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'decreased_stat' => 'setDecreasedStat',
        'increased_stat' => 'setIncreasedStat',
        'likes_flavor' => 'setLikesFlavor',
        'hates_flavor' => 'setHatesFlavor',
        'berries' => 'setBerries',
        'pokeathlon_stat_changes' => 'setPokeathlonStatChanges',
        'move_battle_style_preferences' => 'setMoveBattleStylePreferences',
        'names' => 'setNames'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'decreased_stat' => 'getDecreasedStat',
        'increased_stat' => 'getIncreasedStat',
        'likes_flavor' => 'getLikesFlavor',
        'hates_flavor' => 'getHatesFlavor',
        'berries' => 'getBerries',
        'pokeathlon_stat_changes' => 'getPokeathlonStatChanges',
        'move_battle_style_preferences' => 'getMoveBattleStylePreferences',
        'names' => 'getNames'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('decreased_stat', $data ?? [], null);
        $this->setIfExists('increased_stat', $data ?? [], null);
        $this->setIfExists('likes_flavor', $data ?? [], null);
        $this->setIfExists('hates_flavor', $data ?? [], null);
        $this->setIfExists('berries', $data ?? [], null);
        $this->setIfExists('pokeathlon_stat_changes', $data ?? [], null);
        $this->setIfExists('move_battle_style_preferences', $data ?? [], null);
        $this->setIfExists('names', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['decreased_stat'] === null) {
            $invalidProperties[] = "'decreased_stat' can't be null";
        }
        if ($this->container['increased_stat'] === null) {
            $invalidProperties[] = "'increased_stat' can't be null";
        }
        if ($this->container['likes_flavor'] === null) {
            $invalidProperties[] = "'likes_flavor' can't be null";
        }
        if ($this->container['hates_flavor'] === null) {
            $invalidProperties[] = "'hates_flavor' can't be null";
        }
        if ($this->container['berries'] === null) {
            $invalidProperties[] = "'berries' can't be null";
        }
        if ($this->container['pokeathlon_stat_changes'] === null) {
            $invalidProperties[] = "'pokeathlon_stat_changes' can't be null";
        }
        if ($this->container['move_battle_style_preferences'] === null) {
            $invalidProperties[] = "'move_battle_style_preferences' can't be null";
        }
        if ($this->container['names'] === null) {
            $invalidProperties[] = "'names' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId(int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new InvalidArgumentException('invalid length for $name when calling NatureDetail., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets decreased_stat
     *
     * @return \OpenAPI\Client\Model\StatSummary
     */
    public function getDecreasedStat(): \OpenAPI\Client\Model\StatSummary
    {
        return $this->container['decreased_stat'];
    }

    /**
     * Sets decreased_stat
     *
     * @param \OpenAPI\Client\Model\StatSummary $decreased_stat decreased_stat
     *
     * @return $this
     */
    public function setDecreasedStat(\OpenAPI\Client\Model\StatSummary $decreased_stat): static
    {
        if (is_null($decreased_stat)) {
            throw new InvalidArgumentException('non-nullable decreased_stat cannot be null');
        }
        $this->container['decreased_stat'] = $decreased_stat;

        return $this;
    }

    /**
     * Gets increased_stat
     *
     * @return \OpenAPI\Client\Model\StatSummary
     */
    public function getIncreasedStat(): \OpenAPI\Client\Model\StatSummary
    {
        return $this->container['increased_stat'];
    }

    /**
     * Sets increased_stat
     *
     * @param \OpenAPI\Client\Model\StatSummary $increased_stat increased_stat
     *
     * @return $this
     */
    public function setIncreasedStat(\OpenAPI\Client\Model\StatSummary $increased_stat): static
    {
        if (is_null($increased_stat)) {
            throw new InvalidArgumentException('non-nullable increased_stat cannot be null');
        }
        $this->container['increased_stat'] = $increased_stat;

        return $this;
    }

    /**
     * Gets likes_flavor
     *
     * @return \OpenAPI\Client\Model\BerryFlavorSummary
     */
    public function getLikesFlavor(): \OpenAPI\Client\Model\BerryFlavorSummary
    {
        return $this->container['likes_flavor'];
    }

    /**
     * Sets likes_flavor
     *
     * @param \OpenAPI\Client\Model\BerryFlavorSummary $likes_flavor likes_flavor
     *
     * @return $this
     */
    public function setLikesFlavor(\OpenAPI\Client\Model\BerryFlavorSummary $likes_flavor): static
    {
        if (is_null($likes_flavor)) {
            throw new InvalidArgumentException('non-nullable likes_flavor cannot be null');
        }
        $this->container['likes_flavor'] = $likes_flavor;

        return $this;
    }

    /**
     * Gets hates_flavor
     *
     * @return \OpenAPI\Client\Model\BerryFlavorSummary
     */
    public function getHatesFlavor(): \OpenAPI\Client\Model\BerryFlavorSummary
    {
        return $this->container['hates_flavor'];
    }

    /**
     * Sets hates_flavor
     *
     * @param \OpenAPI\Client\Model\BerryFlavorSummary $hates_flavor hates_flavor
     *
     * @return $this
     */
    public function setHatesFlavor(\OpenAPI\Client\Model\BerryFlavorSummary $hates_flavor): static
    {
        if (is_null($hates_flavor)) {
            throw new InvalidArgumentException('non-nullable hates_flavor cannot be null');
        }
        $this->container['hates_flavor'] = $hates_flavor;

        return $this;
    }

    /**
     * Gets berries
     *
     * @return \OpenAPI\Client\Model\BerrySummary[]
     */
    public function getBerries(): array
    {
        return $this->container['berries'];
    }

    /**
     * Sets berries
     *
     * @param \OpenAPI\Client\Model\BerrySummary[] $berries berries
     *
     * @return $this
     */
    public function setBerries(array $berries): static
    {
        if (is_null($berries)) {
            throw new InvalidArgumentException('non-nullable berries cannot be null');
        }
        $this->container['berries'] = $berries;

        return $this;
    }

    /**
     * Gets pokeathlon_stat_changes
     *
     * @return \OpenAPI\Client\Model\NatureDetailPokeathlonStatChangesInner[]
     */
    public function getPokeathlonStatChanges(): array
    {
        return $this->container['pokeathlon_stat_changes'];
    }

    /**
     * Sets pokeathlon_stat_changes
     *
     * @param \OpenAPI\Client\Model\NatureDetailPokeathlonStatChangesInner[] $pokeathlon_stat_changes pokeathlon_stat_changes
     *
     * @return $this
     */
    public function setPokeathlonStatChanges(array $pokeathlon_stat_changes): static
    {
        if (is_null($pokeathlon_stat_changes)) {
            throw new InvalidArgumentException('non-nullable pokeathlon_stat_changes cannot be null');
        }
        $this->container['pokeathlon_stat_changes'] = $pokeathlon_stat_changes;

        return $this;
    }

    /**
     * Gets move_battle_style_preferences
     *
     * @return \OpenAPI\Client\Model\NatureBattleStylePreference[]
     */
    public function getMoveBattleStylePreferences(): array
    {
        return $this->container['move_battle_style_preferences'];
    }

    /**
     * Sets move_battle_style_preferences
     *
     * @param \OpenAPI\Client\Model\NatureBattleStylePreference[] $move_battle_style_preferences move_battle_style_preferences
     *
     * @return $this
     */
    public function setMoveBattleStylePreferences(array $move_battle_style_preferences): static
    {
        if (is_null($move_battle_style_preferences)) {
            throw new InvalidArgumentException('non-nullable move_battle_style_preferences cannot be null');
        }
        $this->container['move_battle_style_preferences'] = $move_battle_style_preferences;

        return $this;
    }

    /**
     * Gets names
     *
     * @return \OpenAPI\Client\Model\NatureName[]
     */
    public function getNames(): array
    {
        return $this->container['names'];
    }

    /**
     * Sets names
     *
     * @param \OpenAPI\Client\Model\NatureName[] $names names
     *
     * @return $this
     */
    public function setNames(array $names): static
    {
        if (is_null($names)) {
            throw new InvalidArgumentException('non-nullable names cannot be null');
        }
        $this->container['names'] = $names;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


