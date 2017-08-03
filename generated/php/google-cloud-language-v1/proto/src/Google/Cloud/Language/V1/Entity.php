<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a phrase in the text that is a known entity, such as
 * a person, an organization, or location. The API associates information, such
 * as salience and mentions, with entities.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.Entity</code>
 */
class Entity extends \Google\Protobuf\Internal\Message
{
    /**
     * The representative name for the entity.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The entity type.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Entity.Type type = 2;</code>
     */
    private $type = 0;
    /**
     * Metadata associated with the entity.
     * Currently, Wikipedia URLs and Knowledge Graph MIDs are provided, if
     * available. The associated keys are "wikipedia_url" and "mid", respectively.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     */
    private $metadata;
    /**
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     *
     * Generated from protobuf field <code>float salience = 4;</code>
     */
    private $salience = 0.0;
    /**
     * The mentions of this entity in the input document. The API currently
     * supports proper noun mentions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1.EntityMention mentions = 5;</code>
     */
    private $mentions;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * The representative name for the entity.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The representative name for the entity.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * The entity type.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Entity.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The entity type.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Entity.Type type = 2;</code>
     * @param int $var
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\Entity_Type::class);
        $this->type = $var;
    }

    /**
     * Metadata associated with the entity.
     * Currently, Wikipedia URLs and Knowledge Graph MIDs are provided, if
     * available. The associated keys are "wikipedia_url" and "mid", respectively.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Metadata associated with the entity.
     * Currently, Wikipedia URLs and Knowledge Graph MIDs are provided, if
     * available. The associated keys are "wikipedia_url" and "mid", respectively.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     */
    public function setMetadata(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;
    }

    /**
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     *
     * Generated from protobuf field <code>float salience = 4;</code>
     * @return float
     */
    public function getSalience()
    {
        return $this->salience;
    }

    /**
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     *
     * Generated from protobuf field <code>float salience = 4;</code>
     * @param float $var
     */
    public function setSalience($var)
    {
        GPBUtil::checkFloat($var);
        $this->salience = $var;
    }

    /**
     * The mentions of this entity in the input document. The API currently
     * supports proper noun mentions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1.EntityMention mentions = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * The mentions of this entity in the input document. The API currently
     * supports proper noun mentions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1.EntityMention mentions = 5;</code>
     * @param \Google\Cloud\Language\V1\EntityMention[]|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setMentions(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1\EntityMention::class);
        $this->mentions = $arr;
    }

}

