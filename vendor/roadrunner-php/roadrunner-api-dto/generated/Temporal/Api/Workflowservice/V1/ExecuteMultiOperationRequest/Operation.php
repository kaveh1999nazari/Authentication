<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1\ExecuteMultiOperationRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.ExecuteMultiOperationRequest.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Workflowservice\V1\StartWorkflowExecutionRequest $start_workflow
     *           Additional restrictions:
     *           - setting `cron_schedule` is invalid
     *           - setting `request_eager_execution` is invalid
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkflowExecutionRequest $update_workflow
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Additional restrictions:
     * - setting `cron_schedule` is invalid
     * - setting `request_eager_execution` is invalid
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.StartWorkflowExecutionRequest start_workflow = 1;</code>
     * @return \Temporal\Api\Workflowservice\V1\StartWorkflowExecutionRequest|null
     */
    public function getStartWorkflow()
    {
        return $this->readOneof(1);
    }

    public function hasStartWorkflow()
    {
        return $this->hasOneof(1);
    }

    /**
     * Additional restrictions:
     * - setting `cron_schedule` is invalid
     * - setting `request_eager_execution` is invalid
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.StartWorkflowExecutionRequest start_workflow = 1;</code>
     * @param \Temporal\Api\Workflowservice\V1\StartWorkflowExecutionRequest $var
     * @return $this
     */
    public function setStartWorkflow($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\StartWorkflowExecutionRequest::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkflowExecutionRequest update_workflow = 2;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkflowExecutionRequest|null
     */
    public function getUpdateWorkflow()
    {
        return $this->readOneof(2);
    }

    public function hasUpdateWorkflow()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkflowExecutionRequest update_workflow = 2;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkflowExecutionRequest $var
     * @return $this
     */
    public function setUpdateWorkflow($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkflowExecutionRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}
