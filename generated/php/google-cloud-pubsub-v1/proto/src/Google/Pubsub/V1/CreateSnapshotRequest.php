<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CreateSnapshot` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.CreateSnapshotRequest</code>
 */
class CreateSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional user-provided name for this snapshot.
     * If the name is not provided in the request, the server will assign a random
     * name for this snapshot on the same project as the subscription.
     * Note that for REST API requests, you must specify a name.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The subscription whose backlog the snapshot retains.
     * Specifically, the created snapshot is guaranteed to retain:
     *  (a) The existing backlog on the subscription. More precisely, this is
     *      defined as the messages in the subscription's backlog that are
     *      unacknowledged upon the successful completion of the
     *      `CreateSnapshot` request; as well as:
     *  (b) Any messages published to the subscription's topic following the
     *      successful completion of the CreateSnapshot request.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     */
    private $subscription = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * Optional user-provided name for this snapshot.
     * If the name is not provided in the request, the server will assign a random
     * name for this snapshot on the same project as the subscription.
     * Note that for REST API requests, you must specify a name.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional user-provided name for this snapshot.
     * If the name is not provided in the request, the server will assign a random
     * name for this snapshot on the same project as the subscription.
     * Note that for REST API requests, you must specify a name.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The subscription whose backlog the snapshot retains.
     * Specifically, the created snapshot is guaranteed to retain:
     *  (a) The existing backlog on the subscription. More precisely, this is
     *      defined as the messages in the subscription's backlog that are
     *      unacknowledged upon the successful completion of the
     *      `CreateSnapshot` request; as well as:
     *  (b) Any messages published to the subscription's topic following the
     *      successful completion of the CreateSnapshot request.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The subscription whose backlog the snapshot retains.
     * Specifically, the created snapshot is guaranteed to retain:
     *  (a) The existing backlog on the subscription. More precisely, this is
     *      defined as the messages in the subscription's backlog that are
     *      unacknowledged upon the successful completion of the
     *      `CreateSnapshot` request; as well as:
     *  (b) Any messages published to the subscription's topic following the
     *      successful completion of the CreateSnapshot request.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

}

