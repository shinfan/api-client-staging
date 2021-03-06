// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/v1/transaction.proto

package com.google.spanner.v1;

public interface TransactionOptionsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.spanner.v1.TransactionOptions)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Transaction may write.
   * Authorization to begin a read-write transaction requires
   * `spanner.databases.beginOrRollbackReadWriteTransaction` permission
   * on the `session` resource.
   * </pre>
   *
   * <code>.google.spanner.v1.TransactionOptions.ReadWrite read_write = 1;</code>
   */
  com.google.spanner.v1.TransactionOptions.ReadWrite getReadWrite();
  /**
   * <pre>
   * Transaction may write.
   * Authorization to begin a read-write transaction requires
   * `spanner.databases.beginOrRollbackReadWriteTransaction` permission
   * on the `session` resource.
   * </pre>
   *
   * <code>.google.spanner.v1.TransactionOptions.ReadWrite read_write = 1;</code>
   */
  com.google.spanner.v1.TransactionOptions.ReadWriteOrBuilder getReadWriteOrBuilder();

  /**
   * <pre>
   * Transaction will not write.
   * Authorization to begin a read-only transaction requires
   * `spanner.databases.beginReadOnlyTransaction` permission
   * on the `session` resource.
   * </pre>
   *
   * <code>.google.spanner.v1.TransactionOptions.ReadOnly read_only = 2;</code>
   */
  com.google.spanner.v1.TransactionOptions.ReadOnly getReadOnly();
  /**
   * <pre>
   * Transaction will not write.
   * Authorization to begin a read-only transaction requires
   * `spanner.databases.beginReadOnlyTransaction` permission
   * on the `session` resource.
   * </pre>
   *
   * <code>.google.spanner.v1.TransactionOptions.ReadOnly read_only = 2;</code>
   */
  com.google.spanner.v1.TransactionOptions.ReadOnlyOrBuilder getReadOnlyOrBuilder();

  public com.google.spanner.v1.TransactionOptions.ModeCase getModeCase();
}
