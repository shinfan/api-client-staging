<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListGroupMembers` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListGroupMembersResponse</code>
 */
class ListGroupMembersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A set of monitored resources in the group.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResource members = 1;</code>
     */
    private $members;
    /**
     * If there are more results than have been returned, then this field is
     * set to a non-empty value.  To see the additional results, use that value as
     * `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * The total number of elements matching this request.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     */
    private $total_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct();
    }

    /**
     * A set of monitored resources in the group.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResource members = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * A set of monitored resources in the group.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResource members = 1;</code>
     * @param \Google\Api\MonitoredResource[]|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setMembers(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\MonitoredResource::class);
        $this->members = $arr;
    }

    /**
     * If there are more results than have been returned, then this field is
     * set to a non-empty value.  To see the additional results, use that value as
     * `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there are more results than have been returned, then this field is
     * set to a non-empty value.  To see the additional results, use that value as
     * `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

    /**
     * The total number of elements matching this request.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of elements matching this request.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @param int $var
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;
    }

}

