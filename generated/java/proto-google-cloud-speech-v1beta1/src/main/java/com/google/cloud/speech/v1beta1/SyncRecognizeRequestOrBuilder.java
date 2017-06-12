// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/speech/v1beta1/cloud_speech.proto

package com.google.cloud.speech.v1beta1;

public interface SyncRecognizeRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.speech.v1beta1.SyncRecognizeRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * *Required* Provides information to the recognizer that specifies how to
   * process the request.
   * </pre>
   *
   * <code>optional .google.cloud.speech.v1beta1.RecognitionConfig config = 1;</code>
   */
  boolean hasConfig();
  /**
   * <pre>
   * *Required* Provides information to the recognizer that specifies how to
   * process the request.
   * </pre>
   *
   * <code>optional .google.cloud.speech.v1beta1.RecognitionConfig config = 1;</code>
   */
  com.google.cloud.speech.v1beta1.RecognitionConfig getConfig();
  /**
   * <pre>
   * *Required* Provides information to the recognizer that specifies how to
   * process the request.
   * </pre>
   *
   * <code>optional .google.cloud.speech.v1beta1.RecognitionConfig config = 1;</code>
   */
  com.google.cloud.speech.v1beta1.RecognitionConfigOrBuilder getConfigOrBuilder();

  /**
   * <pre>
   * *Required* The audio data to be recognized.
   * </pre>
   *
   * <code>optional .google.cloud.speech.v1beta1.RecognitionAudio audio = 2;</code>
   */
  boolean hasAudio();
  /**
   * <pre>
   * *Required* The audio data to be recognized.
   * </pre>
   *
   * <code>optional .google.cloud.speech.v1beta1.RecognitionAudio audio = 2;</code>
   */
  com.google.cloud.speech.v1beta1.RecognitionAudio getAudio();
  /**
   * <pre>
   * *Required* The audio data to be recognized.
   * </pre>
   *
   * <code>optional .google.cloud.speech.v1beta1.RecognitionAudio audio = 2;</code>
   */
  com.google.cloud.speech.v1beta1.RecognitionAudioOrBuilder getAudioOrBuilder();
}