<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: dependencies/gogoproto/gogo.proto

namespace GPBMetadata\Dependencies\Gogoproto;

class Gogo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A~\x0A!dependencies/gogoproto/gogo.proto\x12\x09gogoproto\x1A google/protobuf/descriptor.protoB\$Z\"github.com/gogo/protobuf/gogoprotob\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}
