<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.ResetWorkflowExecutionResponse</code>
 */
class ResetWorkflowExecutionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string run_id = 1;</code>
     */
    protected $run_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $run_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string run_id = 1;</code>
     * @return string
     */
    public function getRunId()
    {
        return $this->run_id;
    }

    /**
     * Generated from protobuf field <code>string run_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->run_id = $var;

        return $this;
    }

}

