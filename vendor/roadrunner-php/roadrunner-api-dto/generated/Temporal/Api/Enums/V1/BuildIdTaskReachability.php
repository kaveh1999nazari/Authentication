<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/task_queue.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Specifies which category of tasks may reach a versioned worker of a certain Build ID.
 * Task Reachability is eventually consistent; there may be a delay (up to few minutes) until it
 * converges to the most accurate value but it is designed in a way to take the more conservative
 * side until it converges. For example REACHABLE is more conservative than CLOSED_WORKFLOWS_ONLY.
 * Note: future activities who inherit their workflow's Build ID but not its Task Queue will not be
 * accounted for reachability as server cannot know if they'll happen as they do not use
 * assignment rules of their Task Queue. Same goes for Child Workflows or Continue-As-New Workflows
 * who inherit the parent/previous workflow's Build ID but not its Task Queue. In those cases, make
 * sure to query reachability for the parent/previous workflow's Task Queue as well.
 *
 * Protobuf type <code>temporal.api.enums.v1.BuildIdTaskReachability</code>
 */
class BuildIdTaskReachability
{
    /**
     * Task reachability is not reported
     *
     * Generated from protobuf enum <code>BUILD_ID_TASK_REACHABILITY_UNSPECIFIED = 0;</code>
     */
    const BUILD_ID_TASK_REACHABILITY_UNSPECIFIED = 0;
    /**
     * Build ID may be used by new workflows or activities (base on versioning rules), or there MAY
     * be open workflows or backlogged activities assigned to it.
     *
     * Generated from protobuf enum <code>BUILD_ID_TASK_REACHABILITY_REACHABLE = 1;</code>
     */
    const BUILD_ID_TASK_REACHABILITY_REACHABLE = 1;
    /**
     * Build ID does not have open workflows and is not reachable by new workflows,
     * but MAY have closed workflows within the namespace retention period.
     * Not applicable to activity-only task queues.
     *
     * Generated from protobuf enum <code>BUILD_ID_TASK_REACHABILITY_CLOSED_WORKFLOWS_ONLY = 2;</code>
     */
    const BUILD_ID_TASK_REACHABILITY_CLOSED_WORKFLOWS_ONLY = 2;
    /**
     * Build ID is not used for new executions, nor it has been used by any existing execution
     * within the retention period.
     *
     * Generated from protobuf enum <code>BUILD_ID_TASK_REACHABILITY_UNREACHABLE = 3;</code>
     */
    const BUILD_ID_TASK_REACHABILITY_UNREACHABLE = 3;

    private static $valueToName = [
        self::BUILD_ID_TASK_REACHABILITY_UNSPECIFIED => 'BUILD_ID_TASK_REACHABILITY_UNSPECIFIED',
        self::BUILD_ID_TASK_REACHABILITY_REACHABLE => 'BUILD_ID_TASK_REACHABILITY_REACHABLE',
        self::BUILD_ID_TASK_REACHABILITY_CLOSED_WORKFLOWS_ONLY => 'BUILD_ID_TASK_REACHABILITY_CLOSED_WORKFLOWS_ONLY',
        self::BUILD_ID_TASK_REACHABILITY_UNREACHABLE => 'BUILD_ID_TASK_REACHABILITY_UNREACHABLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
