<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.RefreshRequest</code>
 */
class RefreshRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user = 1;</code>
     */
    protected $user = '';
    /**
     * Generated from protobuf field <code>string client = 2;</code>
     */
    protected $client = '';
    /**
     * Generated from protobuf field <code>bool expired = 3;</code>
     */
    protected $expired = false;
    /**
     * Generated from protobuf field <code>int64 expire_at = 4;</code>
     */
    protected $expire_at = 0;
    /**
     * Generated from protobuf field <code>bytes info = 5;</code>
     */
    protected $info = '';
    /**
     * Generated from protobuf field <code>string session = 6;</code>
     */
    protected $session = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user
     *     @type string $client
     *     @type bool $expired
     *     @type int|string $expire_at
     *     @type string $info
     *     @type string $session
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user = 1;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>string user = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client = 2;</code>
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Generated from protobuf field <code>string client = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->client = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool expired = 3;</code>
     * @return bool
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Generated from protobuf field <code>bool expired = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpired($var)
    {
        GPBUtil::checkBool($var);
        $this->expired = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 4;</code>
     * @return int|string
     */
    public function getExpireAt()
    {
        return $this->expire_at;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes info = 5;</code>
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Generated from protobuf field <code>bytes info = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkString($var, False);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string session = 6;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Generated from protobuf field <code>string session = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

}

