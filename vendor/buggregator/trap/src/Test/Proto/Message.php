<?php

declare(strict_types=1);
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace Buggregator\Trap\Test\Proto;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>stub.proto.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;

    /**
     * Generated from protobuf field <code>string command = 2;</code>
     */
    protected $command = '';

    /**
     * Generated from protobuf field <code>string payload = 3;</code>
     */
    protected $payload = '';

    /**
     * Generated from protobuf field <code>.stub.proto.Message.Foo foo = 8;</code>
     */
    protected $foo = 0;

    /**
     * Generated from protobuf field <code>bool is_foo = 9;</code>
     */
    protected $is_foo = false;

    /**
     * Generated from protobuf field <code>bytes data = 10;</code>
     */
    protected $data = '';

    protected $meta;

    /**
     * Generated from protobuf field <code>repeated .stub.proto.Message.Metadata main_metadata = 4;</code>
     */
    private $main_metadata;

    /**
     * Generated from protobuf field <code>map<string, string> mapa_mapa = 13;</code>
     */
    private $mapa_mapa;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $command
     *     @type string $payload
     *     @type array<\Buggregator\Trap\Test\Proto\Message\Metadata>|\Google\Protobuf\Internal\RepeatedField $main_metadata
     *     @type int $foo
     *     @type bool $is_foo
     *     @type string $data
     *     @type \Buggregator\Trap\Test\Proto\Message\Metadata $metadata
     *     @type \Buggregator\Trap\Test\Proto\Message\Header $header
     *     @type array|\Google\Protobuf\Internal\MapField $mapa_mapa
     * }
     */
    public function __construct($data = null)
    {
        Metadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string command = 2;</code>
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Generated from protobuf field <code>string command = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkString($var, true);
        $this->command = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payload = 3;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>string payload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, true);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .stub.proto.Message.Metadata main_metadata = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMainMetadata()
    {
        return $this->main_metadata;
    }

    /**
     * Generated from protobuf field <code>repeated .stub.proto.Message.Metadata main_metadata = 4;</code>
     *
     * @param array<\Buggregator\Trap\Test\Proto\Message\Metadata>|\Google\Protobuf\Internal\RepeatedField $var
     *
     * @return $this
     */
    public function setMainMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, Message\Metadata::class);
        $this->main_metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.stub.proto.Message.Foo foo = 8;</code>
     * @return int
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * Generated from protobuf field <code>.stub.proto.Message.Foo foo = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setFoo($var)
    {
        GPBUtil::checkEnum($var, Message\Foo::class);
        $this->foo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_foo = 9;</code>
     * @return bool
     */
    public function getIsFoo()
    {
        return $this->is_foo;
    }

    /**
     * Generated from protobuf field <code>bool is_foo = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFoo($var)
    {
        GPBUtil::checkBool($var);
        $this->is_foo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 10;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, false);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.stub.proto.Message.Metadata metadata = 11;</code>
     *
     * @return \Buggregator\Trap\Test\Proto\Message\Metadata|null
     */
    public function getMetadata()
    {
        return $this->readOneof(11);
    }

    public function hasMetadata()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.stub.proto.Message.Metadata metadata = 11;</code>
     *
     * @param \Buggregator\Trap\Test\Proto\Message\Metadata $var
     *
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, Message\Metadata::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.stub.proto.Message.Header header = 12;</code>
     *
     * @return \Buggregator\Trap\Test\Proto\Message\Header|null
     */
    public function getHeader()
    {
        return $this->readOneof(12);
    }

    public function hasHeader()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.stub.proto.Message.Header header = 12;</code>
     *
     * @param \Buggregator\Trap\Test\Proto\Message\Header $var
     *
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, Message\Header::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> mapa_mapa = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMapaMapa()
    {
        return $this->mapa_mapa;
    }

    /**
     * Generated from protobuf field <code>map<string, string> mapa_mapa = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMapaMapa($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->mapa_mapa = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeta()
    {
        return $this->whichOneof("meta");
    }
}