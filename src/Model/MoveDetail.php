<?php
/**
 * MoveDetail
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
 * MoveDetail Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MoveDetail implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MoveDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'accuracy' => 'int',
        'effect_chance' => 'int',
        'pp' => 'int',
        'priority' => 'int',
        'power' => 'int',
        'contest_combos' => '\OpenAPI\Client\Model\MoveDetailContestCombos',
        'contest_type' => '\OpenAPI\Client\Model\ContestTypeSummary',
        'contest_effect' => '\OpenAPI\Client\Model\ContestEffectSummary',
        'damage_class' => '\OpenAPI\Client\Model\MoveDamageClassSummary',
        'effect_entries' => '\OpenAPI\Client\Model\MoveChangeEffectEntriesInner[]',
        'effect_changes' => '\OpenAPI\Client\Model\MoveDetailEffectChangesInner[]',
        'generation' => '\OpenAPI\Client\Model\GenerationSummary',
        'meta' => '\OpenAPI\Client\Model\MoveMeta',
        'names' => '\OpenAPI\Client\Model\MoveName[]',
        'past_values' => '\OpenAPI\Client\Model\MoveChange[]',
        'stat_changes' => '\OpenAPI\Client\Model\MoveDetailStatChangesInner[]',
        'super_contest_effect' => '\OpenAPI\Client\Model\SuperContestEffectSummary',
        'target' => '\OpenAPI\Client\Model\MoveTargetSummary',
        'type' => '\OpenAPI\Client\Model\TypeSummary',
        'machines' => '\OpenAPI\Client\Model\MoveDetailMachinesInner[]',
        'flavor_text_entries' => '\OpenAPI\Client\Model\MoveFlavorText[]',
        'learned_by_pokemon' => '\OpenAPI\Client\Model\AbilityDetailPokemonInnerPokemon[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'accuracy' => null,
        'effect_chance' => null,
        'pp' => null,
        'priority' => null,
        'power' => null,
        'contest_combos' => null,
        'contest_type' => null,
        'contest_effect' => null,
        'damage_class' => null,
        'effect_entries' => null,
        'effect_changes' => null,
        'generation' => null,
        'meta' => null,
        'names' => null,
        'past_values' => null,
        'stat_changes' => null,
        'super_contest_effect' => null,
        'target' => null,
        'type' => null,
        'machines' => null,
        'flavor_text_entries' => null,
        'learned_by_pokemon' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'accuracy' => true,
        'effect_chance' => false,
        'pp' => true,
        'priority' => true,
        'power' => true,
        'contest_combos' => false,
        'contest_type' => false,
        'contest_effect' => false,
        'damage_class' => false,
        'effect_entries' => false,
        'effect_changes' => false,
        'generation' => false,
        'meta' => false,
        'names' => false,
        'past_values' => false,
        'stat_changes' => false,
        'super_contest_effect' => false,
        'target' => false,
        'type' => false,
        'machines' => false,
        'flavor_text_entries' => false,
        'learned_by_pokemon' => false
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
        'accuracy' => 'accuracy',
        'effect_chance' => 'effect_chance',
        'pp' => 'pp',
        'priority' => 'priority',
        'power' => 'power',
        'contest_combos' => 'contest_combos',
        'contest_type' => 'contest_type',
        'contest_effect' => 'contest_effect',
        'damage_class' => 'damage_class',
        'effect_entries' => 'effect_entries',
        'effect_changes' => 'effect_changes',
        'generation' => 'generation',
        'meta' => 'meta',
        'names' => 'names',
        'past_values' => 'past_values',
        'stat_changes' => 'stat_changes',
        'super_contest_effect' => 'super_contest_effect',
        'target' => 'target',
        'type' => 'type',
        'machines' => 'machines',
        'flavor_text_entries' => 'flavor_text_entries',
        'learned_by_pokemon' => 'learned_by_pokemon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'accuracy' => 'setAccuracy',
        'effect_chance' => 'setEffectChance',
        'pp' => 'setPp',
        'priority' => 'setPriority',
        'power' => 'setPower',
        'contest_combos' => 'setContestCombos',
        'contest_type' => 'setContestType',
        'contest_effect' => 'setContestEffect',
        'damage_class' => 'setDamageClass',
        'effect_entries' => 'setEffectEntries',
        'effect_changes' => 'setEffectChanges',
        'generation' => 'setGeneration',
        'meta' => 'setMeta',
        'names' => 'setNames',
        'past_values' => 'setPastValues',
        'stat_changes' => 'setStatChanges',
        'super_contest_effect' => 'setSuperContestEffect',
        'target' => 'setTarget',
        'type' => 'setType',
        'machines' => 'setMachines',
        'flavor_text_entries' => 'setFlavorTextEntries',
        'learned_by_pokemon' => 'setLearnedByPokemon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'accuracy' => 'getAccuracy',
        'effect_chance' => 'getEffectChance',
        'pp' => 'getPp',
        'priority' => 'getPriority',
        'power' => 'getPower',
        'contest_combos' => 'getContestCombos',
        'contest_type' => 'getContestType',
        'contest_effect' => 'getContestEffect',
        'damage_class' => 'getDamageClass',
        'effect_entries' => 'getEffectEntries',
        'effect_changes' => 'getEffectChanges',
        'generation' => 'getGeneration',
        'meta' => 'getMeta',
        'names' => 'getNames',
        'past_values' => 'getPastValues',
        'stat_changes' => 'getStatChanges',
        'super_contest_effect' => 'getSuperContestEffect',
        'target' => 'getTarget',
        'type' => 'getType',
        'machines' => 'getMachines',
        'flavor_text_entries' => 'getFlavorTextEntries',
        'learned_by_pokemon' => 'getLearnedByPokemon'
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
        $this->setIfExists('accuracy', $data ?? [], null);
        $this->setIfExists('effect_chance', $data ?? [], null);
        $this->setIfExists('pp', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('power', $data ?? [], null);
        $this->setIfExists('contest_combos', $data ?? [], null);
        $this->setIfExists('contest_type', $data ?? [], null);
        $this->setIfExists('contest_effect', $data ?? [], null);
        $this->setIfExists('damage_class', $data ?? [], null);
        $this->setIfExists('effect_entries', $data ?? [], null);
        $this->setIfExists('effect_changes', $data ?? [], null);
        $this->setIfExists('generation', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('names', $data ?? [], null);
        $this->setIfExists('past_values', $data ?? [], null);
        $this->setIfExists('stat_changes', $data ?? [], null);
        $this->setIfExists('super_contest_effect', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('machines', $data ?? [], null);
        $this->setIfExists('flavor_text_entries', $data ?? [], null);
        $this->setIfExists('learned_by_pokemon', $data ?? [], null);
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

        if ($this->container['effect_chance'] === null) {
            $invalidProperties[] = "'effect_chance' can't be null";
        }
        if ($this->container['contest_combos'] === null) {
            $invalidProperties[] = "'contest_combos' can't be null";
        }
        if ($this->container['contest_type'] === null) {
            $invalidProperties[] = "'contest_type' can't be null";
        }
        if ($this->container['contest_effect'] === null) {
            $invalidProperties[] = "'contest_effect' can't be null";
        }
        if ($this->container['damage_class'] === null) {
            $invalidProperties[] = "'damage_class' can't be null";
        }
        if ($this->container['effect_entries'] === null) {
            $invalidProperties[] = "'effect_entries' can't be null";
        }
        if ($this->container['effect_changes'] === null) {
            $invalidProperties[] = "'effect_changes' can't be null";
        }
        if ($this->container['generation'] === null) {
            $invalidProperties[] = "'generation' can't be null";
        }
        if ($this->container['meta'] === null) {
            $invalidProperties[] = "'meta' can't be null";
        }
        if ($this->container['names'] === null) {
            $invalidProperties[] = "'names' can't be null";
        }
        if ($this->container['past_values'] === null) {
            $invalidProperties[] = "'past_values' can't be null";
        }
        if ($this->container['stat_changes'] === null) {
            $invalidProperties[] = "'stat_changes' can't be null";
        }
        if ($this->container['super_contest_effect'] === null) {
            $invalidProperties[] = "'super_contest_effect' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['machines'] === null) {
            $invalidProperties[] = "'machines' can't be null";
        }
        if ($this->container['flavor_text_entries'] === null) {
            $invalidProperties[] = "'flavor_text_entries' can't be null";
        }
        if ($this->container['learned_by_pokemon'] === null) {
            $invalidProperties[] = "'learned_by_pokemon' can't be null";
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
            throw new InvalidArgumentException('invalid length for $name when calling MoveDetail., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets accuracy
     *
     * @return int|null
     */
    public function getAccuracy(): ?int
    {
        return $this->container['accuracy'];
    }

    /**
     * Sets accuracy
     *
     * @param int|null $accuracy accuracy
     *
     * @return $this
     */
    public function setAccuracy(?int $accuracy): static
    {
        if (is_null($accuracy)) {
            array_push($this->openAPINullablesSetToNull, 'accuracy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accuracy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accuracy'] = $accuracy;

        return $this;
    }

    /**
     * Gets effect_chance
     *
     * @return int
     */
    public function getEffectChance(): int
    {
        return $this->container['effect_chance'];
    }

    /**
     * Sets effect_chance
     *
     * @param int $effect_chance effect_chance
     *
     * @return $this
     */
    public function setEffectChance(int $effect_chance): static
    {
        if (is_null($effect_chance)) {
            throw new InvalidArgumentException('non-nullable effect_chance cannot be null');
        }
        $this->container['effect_chance'] = $effect_chance;

        return $this;
    }

    /**
     * Gets pp
     *
     * @return int|null
     */
    public function getPp(): ?int
    {
        return $this->container['pp'];
    }

    /**
     * Sets pp
     *
     * @param int|null $pp pp
     *
     * @return $this
     */
    public function setPp(?int $pp): static
    {
        if (is_null($pp)) {
            array_push($this->openAPINullablesSetToNull, 'pp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pp'] = $pp;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return $this
     */
    public function setPriority(?int $priority): static
    {
        if (is_null($priority)) {
            array_push($this->openAPINullablesSetToNull, 'priority');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('priority', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets power
     *
     * @return int|null
     */
    public function getPower(): ?int
    {
        return $this->container['power'];
    }

    /**
     * Sets power
     *
     * @param int|null $power power
     *
     * @return $this
     */
    public function setPower(?int $power): static
    {
        if (is_null($power)) {
            array_push($this->openAPINullablesSetToNull, 'power');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('power', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['power'] = $power;

        return $this;
    }

    /**
     * Gets contest_combos
     *
     * @return \OpenAPI\Client\Model\MoveDetailContestCombos
     */
    public function getContestCombos(): \OpenAPI\Client\Model\MoveDetailContestCombos
    {
        return $this->container['contest_combos'];
    }

    /**
     * Sets contest_combos
     *
     * @param \OpenAPI\Client\Model\MoveDetailContestCombos $contest_combos contest_combos
     *
     * @return $this
     */
    public function setContestCombos(\OpenAPI\Client\Model\MoveDetailContestCombos $contest_combos): static
    {
        if (is_null($contest_combos)) {
            throw new InvalidArgumentException('non-nullable contest_combos cannot be null');
        }
        $this->container['contest_combos'] = $contest_combos;

        return $this;
    }

    /**
     * Gets contest_type
     *
     * @return \OpenAPI\Client\Model\ContestTypeSummary
     */
    public function getContestType(): \OpenAPI\Client\Model\ContestTypeSummary
    {
        return $this->container['contest_type'];
    }

    /**
     * Sets contest_type
     *
     * @param \OpenAPI\Client\Model\ContestTypeSummary $contest_type contest_type
     *
     * @return $this
     */
    public function setContestType(\OpenAPI\Client\Model\ContestTypeSummary $contest_type): static
    {
        if (is_null($contest_type)) {
            throw new InvalidArgumentException('non-nullable contest_type cannot be null');
        }
        $this->container['contest_type'] = $contest_type;

        return $this;
    }

    /**
     * Gets contest_effect
     *
     * @return \OpenAPI\Client\Model\ContestEffectSummary
     */
    public function getContestEffect(): \OpenAPI\Client\Model\ContestEffectSummary
    {
        return $this->container['contest_effect'];
    }

    /**
     * Sets contest_effect
     *
     * @param \OpenAPI\Client\Model\ContestEffectSummary $contest_effect contest_effect
     *
     * @return $this
     */
    public function setContestEffect(\OpenAPI\Client\Model\ContestEffectSummary $contest_effect): static
    {
        if (is_null($contest_effect)) {
            throw new InvalidArgumentException('non-nullable contest_effect cannot be null');
        }
        $this->container['contest_effect'] = $contest_effect;

        return $this;
    }

    /**
     * Gets damage_class
     *
     * @return \OpenAPI\Client\Model\MoveDamageClassSummary
     */
    public function getDamageClass(): \OpenAPI\Client\Model\MoveDamageClassSummary
    {
        return $this->container['damage_class'];
    }

    /**
     * Sets damage_class
     *
     * @param \OpenAPI\Client\Model\MoveDamageClassSummary $damage_class damage_class
     *
     * @return $this
     */
    public function setDamageClass(\OpenAPI\Client\Model\MoveDamageClassSummary $damage_class): static
    {
        if (is_null($damage_class)) {
            throw new InvalidArgumentException('non-nullable damage_class cannot be null');
        }
        $this->container['damage_class'] = $damage_class;

        return $this;
    }

    /**
     * Gets effect_entries
     *
     * @return \OpenAPI\Client\Model\MoveChangeEffectEntriesInner[]
     */
    public function getEffectEntries(): array
    {
        return $this->container['effect_entries'];
    }

    /**
     * Sets effect_entries
     *
     * @param \OpenAPI\Client\Model\MoveChangeEffectEntriesInner[] $effect_entries effect_entries
     *
     * @return $this
     */
    public function setEffectEntries(array $effect_entries): static
    {
        if (is_null($effect_entries)) {
            throw new InvalidArgumentException('non-nullable effect_entries cannot be null');
        }
        $this->container['effect_entries'] = $effect_entries;

        return $this;
    }

    /**
     * Gets effect_changes
     *
     * @return \OpenAPI\Client\Model\MoveDetailEffectChangesInner[]
     */
    public function getEffectChanges(): array
    {
        return $this->container['effect_changes'];
    }

    /**
     * Sets effect_changes
     *
     * @param \OpenAPI\Client\Model\MoveDetailEffectChangesInner[] $effect_changes effect_changes
     *
     * @return $this
     */
    public function setEffectChanges(array $effect_changes): static
    {
        if (is_null($effect_changes)) {
            throw new InvalidArgumentException('non-nullable effect_changes cannot be null');
        }
        $this->container['effect_changes'] = $effect_changes;

        return $this;
    }

    /**
     * Gets generation
     *
     * @return \OpenAPI\Client\Model\GenerationSummary
     */
    public function getGeneration(): \OpenAPI\Client\Model\GenerationSummary
    {
        return $this->container['generation'];
    }

    /**
     * Sets generation
     *
     * @param \OpenAPI\Client\Model\GenerationSummary $generation generation
     *
     * @return $this
     */
    public function setGeneration(\OpenAPI\Client\Model\GenerationSummary $generation): static
    {
        if (is_null($generation)) {
            throw new InvalidArgumentException('non-nullable generation cannot be null');
        }
        $this->container['generation'] = $generation;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \OpenAPI\Client\Model\MoveMeta
     */
    public function getMeta(): \OpenAPI\Client\Model\MoveMeta
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \OpenAPI\Client\Model\MoveMeta $meta meta
     *
     * @return $this
     */
    public function setMeta(\OpenAPI\Client\Model\MoveMeta $meta): static
    {
        if (is_null($meta)) {
            throw new InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets names
     *
     * @return \OpenAPI\Client\Model\MoveName[]
     */
    public function getNames(): array
    {
        return $this->container['names'];
    }

    /**
     * Sets names
     *
     * @param \OpenAPI\Client\Model\MoveName[] $names names
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
     * Gets past_values
     *
     * @return \OpenAPI\Client\Model\MoveChange[]
     */
    public function getPastValues(): array
    {
        return $this->container['past_values'];
    }

    /**
     * Sets past_values
     *
     * @param \OpenAPI\Client\Model\MoveChange[] $past_values past_values
     *
     * @return $this
     */
    public function setPastValues(array $past_values): static
    {
        if (is_null($past_values)) {
            throw new InvalidArgumentException('non-nullable past_values cannot be null');
        }
        $this->container['past_values'] = $past_values;

        return $this;
    }

    /**
     * Gets stat_changes
     *
     * @return \OpenAPI\Client\Model\MoveDetailStatChangesInner[]
     */
    public function getStatChanges(): array
    {
        return $this->container['stat_changes'];
    }

    /**
     * Sets stat_changes
     *
     * @param \OpenAPI\Client\Model\MoveDetailStatChangesInner[] $stat_changes stat_changes
     *
     * @return $this
     */
    public function setStatChanges(array $stat_changes): static
    {
        if (is_null($stat_changes)) {
            throw new InvalidArgumentException('non-nullable stat_changes cannot be null');
        }
        $this->container['stat_changes'] = $stat_changes;

        return $this;
    }

    /**
     * Gets super_contest_effect
     *
     * @return \OpenAPI\Client\Model\SuperContestEffectSummary
     */
    public function getSuperContestEffect(): \OpenAPI\Client\Model\SuperContestEffectSummary
    {
        return $this->container['super_contest_effect'];
    }

    /**
     * Sets super_contest_effect
     *
     * @param \OpenAPI\Client\Model\SuperContestEffectSummary $super_contest_effect super_contest_effect
     *
     * @return $this
     */
    public function setSuperContestEffect(\OpenAPI\Client\Model\SuperContestEffectSummary $super_contest_effect): static
    {
        if (is_null($super_contest_effect)) {
            throw new InvalidArgumentException('non-nullable super_contest_effect cannot be null');
        }
        $this->container['super_contest_effect'] = $super_contest_effect;

        return $this;
    }

    /**
     * Gets target
     *
     * @return \OpenAPI\Client\Model\MoveTargetSummary
     */
    public function getTarget(): \OpenAPI\Client\Model\MoveTargetSummary
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \OpenAPI\Client\Model\MoveTargetSummary $target target
     *
     * @return $this
     */
    public function setTarget(\OpenAPI\Client\Model\MoveTargetSummary $target): static
    {
        if (is_null($target)) {
            throw new InvalidArgumentException('non-nullable target cannot be null');
        }
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\TypeSummary
     */
    public function getType(): \OpenAPI\Client\Model\TypeSummary
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\TypeSummary $type type
     *
     * @return $this
     */
    public function setType(\OpenAPI\Client\Model\TypeSummary $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets machines
     *
     * @return \OpenAPI\Client\Model\MoveDetailMachinesInner[]
     */
    public function getMachines(): array
    {
        return $this->container['machines'];
    }

    /**
     * Sets machines
     *
     * @param \OpenAPI\Client\Model\MoveDetailMachinesInner[] $machines machines
     *
     * @return $this
     */
    public function setMachines(array $machines): static
    {
        if (is_null($machines)) {
            throw new InvalidArgumentException('non-nullable machines cannot be null');
        }
        $this->container['machines'] = $machines;

        return $this;
    }

    /**
     * Gets flavor_text_entries
     *
     * @return \OpenAPI\Client\Model\MoveFlavorText[]
     */
    public function getFlavorTextEntries(): array
    {
        return $this->container['flavor_text_entries'];
    }

    /**
     * Sets flavor_text_entries
     *
     * @param \OpenAPI\Client\Model\MoveFlavorText[] $flavor_text_entries flavor_text_entries
     *
     * @return $this
     */
    public function setFlavorTextEntries(array $flavor_text_entries): static
    {
        if (is_null($flavor_text_entries)) {
            throw new InvalidArgumentException('non-nullable flavor_text_entries cannot be null');
        }
        $this->container['flavor_text_entries'] = $flavor_text_entries;

        return $this;
    }

    /**
     * Gets learned_by_pokemon
     *
     * @return \OpenAPI\Client\Model\AbilityDetailPokemonInnerPokemon[]
     */
    public function getLearnedByPokemon(): array
    {
        return $this->container['learned_by_pokemon'];
    }

    /**
     * Sets learned_by_pokemon
     *
     * @param \OpenAPI\Client\Model\AbilityDetailPokemonInnerPokemon[] $learned_by_pokemon learned_by_pokemon
     *
     * @return $this
     */
    public function setLearnedByPokemon(array $learned_by_pokemon): static
    {
        if (is_null($learned_by_pokemon)) {
            throw new InvalidArgumentException('non-nullable learned_by_pokemon cannot be null');
        }
        $this->container['learned_by_pokemon'] = $learned_by_pokemon;

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

