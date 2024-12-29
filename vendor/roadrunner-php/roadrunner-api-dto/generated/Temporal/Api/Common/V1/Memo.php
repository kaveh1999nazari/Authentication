<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/common/v1/message.proto

namespace Temporal\Api\Common\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user-defined set of *unindexed* fields that are exposed when listing/searching workflows
 *
 * Generated from protobuf message <code>temporal.api.common.v1.Memo</code>
 */
class Memo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .temporal.api.common.v1.Payload> fields = 1;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .temporal.api.common.v1.Payload> fields = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Generated from protobuf field <code>map<string, .temporal.api.common.v1.Payload> fields = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Common\V1\Payload::class);
        $this->fields = $arr;

        return $this;
    }

}

