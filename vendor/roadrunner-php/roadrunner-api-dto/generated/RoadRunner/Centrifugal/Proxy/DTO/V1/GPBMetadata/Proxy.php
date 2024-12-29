<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/proxy/v1/proxy.proto

namespace RoadRunner\Centrifugal\Proxy\DTO\V1\GPBMetadata;

class Proxy
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xF6-\x0A\x1Fcentrifugo/proxy/v1/proxy.proto\x12\x1Ccentrifugal.centrifugo.proxy\"0\x0A\x0ADisconnect\x12\x0C\x0A\x04code\x18\x01 \x01(\x0D\x12\x0E\x0A\x06reason\x18\x02 \x01(\x09J\x04\x08\x03\x10\x04\"9\x0A\x05Error\x12\x0C\x0A\x04code\x18\x01 \x01(\x0D\x12\x0F\x0A\x07message\x18\x02 \x01(\x09\x12\x11\x0A\x09temporary\x18\x03 \x01(\x08\"\xA7\x01\x0A\x0EConnectRequest\x12\x0E\x0A\x06client\x18\x01 \x01(\x09\x12\x11\x0A\x09transport\x18\x02 \x01(\x09\x12\x10\x0A\x08protocol\x18\x03 \x01(\x09\x12\x10\x0A\x08encoding\x18\x04 \x01(\x09\x12\x0C\x0A\x04data\x18\x0A \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x0B \x01(\x09\x12\x0C\x0A\x04name\x18\x0C \x01(\x09\x12\x0F\x0A\x07version\x18\x0D \x01(\x09\x12\x10\x0A\x08channels\x18\x0E \x03(\x09\"\xAC\x01\x0A\x10SubscribeOptions\x12\x11\x0A\x09expire_at\x18\x01 \x01(\x03\x12\x0C\x0A\x04info\x18\x02 \x01(\x0C\x12\x0F\x0A\x07b64info\x18\x03 \x01(\x09\x12\x0C\x0A\x04data\x18\x04 \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x05 \x01(\x09\x12G\x0A\x08override\x18\x06 \x01(\x0B25.centrifugal.centrifugo.proxy.SubscribeOptionOverride\"\xF0\x02\x0A\x0DConnectResult\x12\x0C\x0A\x04user\x18\x01 \x01(\x09\x12\x11\x0A\x09expire_at\x18\x02 \x01(\x03\x12\x0C\x0A\x04info\x18\x03 \x01(\x0C\x12\x0F\x0A\x07b64info\x18\x04 \x01(\x09\x12\x0C\x0A\x04data\x18\x05 \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x06 \x01(\x09\x12\x10\x0A\x08channels\x18\x07 \x03(\x09\x12C\x0A\x04subs\x18\x08 \x03(\x0B25.centrifugal.centrifugo.proxy.ConnectResult.SubsEntry\x12\x0C\x0A\x04meta\x18\x09 \x01(\x0C\x12>\x0A\x04caps\x18\x0A \x03(\x0B20.centrifugal.centrifugo.proxy.ChannelsCapability\x1A[\x0A\x09SubsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12=\x0A\x05value\x18\x02 \x01(\x0B2..centrifugal.centrifugo.proxy.SubscribeOptions:\x028\x01\"D\x0A\x12ChannelsCapability\x12\x10\x0A\x08channels\x18\x01 \x03(\x09\x12\x0D\x0A\x05allow\x18\x02 \x03(\x09\x12\x0D\x0A\x05match\x18\x03 \x01(\x09\"\xC0\x01\x0A\x0FConnectResponse\x12;\x0A\x06result\x18\x01 \x01(\x0B2+.centrifugal.centrifugo.proxy.ConnectResult\x122\x0A\x05error\x18\x02 \x01(\x0B2#.centrifugal.centrifugo.proxy.Error\x12<\x0A\x0Adisconnect\x18\x03 \x01(\x0B2(.centrifugal.centrifugo.proxy.Disconnect\"s\x0A\x0ERefreshRequest\x12\x0E\x0A\x06client\x18\x01 \x01(\x09\x12\x11\x0A\x09transport\x18\x02 \x01(\x09\x12\x10\x0A\x08protocol\x18\x03 \x01(\x09\x12\x10\x0A\x08encoding\x18\x04 \x01(\x09\x12\x0C\x0A\x04user\x18\x0A \x01(\x09\x12\x0C\x0A\x04meta\x18\x0B \x01(\x0C\"\xA0\x01\x0A\x0DRefreshResult\x12\x0F\x0A\x07expired\x18\x01 \x01(\x08\x12\x11\x0A\x09expire_at\x18\x02 \x01(\x03\x12\x0C\x0A\x04info\x18\x03 \x01(\x0C\x12\x0F\x0A\x07b64info\x18\x04 \x01(\x09\x12\x0C\x0A\x04meta\x18\x05 \x01(\x0C\x12>\x0A\x04caps\x18\x06 \x03(\x0B20.centrifugal.centrifugo.proxy.ChannelsCapability\"\xC0\x01\x0A\x0FRefreshResponse\x12;\x0A\x06result\x18\x01 \x01(\x0B2+.centrifugal.centrifugo.proxy.RefreshResult\x122\x0A\x05error\x18\x02 \x01(\x0B2#.centrifugal.centrifugo.proxy.Error\x12<\x0A\x0Adisconnect\x18\x03 \x01(\x0B2(.centrifugal.centrifugo.proxy.Disconnect\"\xB4\x01\x0A\x10SubscribeRequest\x12\x0E\x0A\x06client\x18\x01 \x01(\x09\x12\x11\x0A\x09transport\x18\x02 \x01(\x09\x12\x10\x0A\x08protocol\x18\x03 \x01(\x09\x12\x10\x0A\x08encoding\x18\x04 \x01(\x09\x12\x0C\x0A\x04user\x18\x0A \x01(\x09\x12\x0F\x0A\x07channel\x18\x0B \x01(\x09\x12\x0D\x0A\x05token\x18\x0C \x01(\x09\x12\x0C\x0A\x04meta\x18\x0D \x01(\x0C\x12\x0C\x0A\x04data\x18\x0E \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x0F \x01(\x09\"\x1A\x0A\x09BoolValue\x12\x0D\x0A\x05value\x18\x01 \x01(\x08\"\x1B\x0A\x0AInt32Value\x12\x0D\x0A\x05value\x18\x01 \x01(\x05\"\xDE\x02\x0A\x17SubscribeOptionOverride\x129\x0A\x08presence\x18\x01 \x01(\x0B2'.centrifugal.centrifugo.proxy.BoolValue\x12;\x0A\x0Ajoin_leave\x18\x02 \x01(\x0B2'.centrifugal.centrifugo.proxy.BoolValue\x12?\x0A\x0Eforce_recovery\x18\x03 \x01(\x0B2'.centrifugal.centrifugo.proxy.BoolValue\x12B\x0A\x11force_positioning\x18\x04 \x01(\x0B2'.centrifugal.centrifugo.proxy.BoolValue\x12F\x0A\x15force_push_join_leave\x18\x05 \x01(\x0B2'.centrifugal.centrifugo.proxy.BoolValue\"\xBA\x01\x0A\x0FSubscribeResult\x12\x11\x0A\x09expire_at\x18\x01 \x01(\x03\x12\x0C\x0A\x04info\x18\x02 \x01(\x0C\x12\x0F\x0A\x07b64info\x18\x03 \x01(\x09\x12\x0C\x0A\x04data\x18\x04 \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x05 \x01(\x09\x12G\x0A\x08override\x18\x06 \x01(\x0B25.centrifugal.centrifugo.proxy.SubscribeOptionOverride\x12\x0D\x0A\x05allow\x18\x07 \x03(\x09\"\xC4\x01\x0A\x11SubscribeResponse\x12=\x0A\x06result\x18\x01 \x01(\x0B2-.centrifugal.centrifugo.proxy.SubscribeResult\x122\x0A\x05error\x18\x02 \x01(\x0B2#.centrifugal.centrifugo.proxy.Error\x12<\x0A\x0Adisconnect\x18\x03 \x01(\x0B2(.centrifugal.centrifugo.proxy.Disconnect\"\xA3\x01\x0A\x0EPublishRequest\x12\x0E\x0A\x06client\x18\x01 \x01(\x09\x12\x11\x0A\x09transport\x18\x02 \x01(\x09\x12\x10\x0A\x08protocol\x18\x03 \x01(\x09\x12\x10\x0A\x08encoding\x18\x04 \x01(\x09\x12\x0C\x0A\x04user\x18\x0A \x01(\x09\x12\x0F\x0A\x07channel\x18\x0B \x01(\x09\x12\x0C\x0A\x04data\x18\x0C \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x0D \x01(\x09\x12\x0C\x0A\x04meta\x18\x0E \x01(\x0C\"D\x0A\x0DPublishResult\x12\x0C\x0A\x04data\x18\x01 \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x02 \x01(\x09\x12\x14\x0A\x0Cskip_history\x18\x03 \x01(\x08\"\xC0\x01\x0A\x0FPublishResponse\x12;\x0A\x06result\x18\x01 \x01(\x0B2+.centrifugal.centrifugo.proxy.PublishResult\x122\x0A\x05error\x18\x02 \x01(\x0B2#.centrifugal.centrifugo.proxy.Error\x12<\x0A\x0Adisconnect\x18\x03 \x01(\x0B2(.centrifugal.centrifugo.proxy.Disconnect\"\x9E\x01\x0A\x0ARPCRequest\x12\x0E\x0A\x06client\x18\x01 \x01(\x09\x12\x11\x0A\x09transport\x18\x02 \x01(\x09\x12\x10\x0A\x08protocol\x18\x03 \x01(\x09\x12\x10\x0A\x08encoding\x18\x04 \x01(\x09\x12\x0C\x0A\x04user\x18\x0A \x01(\x09\x12\x0E\x0A\x06method\x18\x0B \x01(\x09\x12\x0C\x0A\x04data\x18\x0C \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x0D \x01(\x09\x12\x0C\x0A\x04meta\x18\x0E \x01(\x0C\"*\x0A\x09RPCResult\x12\x0C\x0A\x04data\x18\x01 \x01(\x0C\x12\x0F\x0A\x07b64data\x18\x02 \x01(\x09\"\xB8\x01\x0A\x0BRPCResponse\x127\x0A\x06result\x18\x01 \x01(\x0B2'.centrifugal.centrifugo.proxy.RPCResult\x122\x0A\x05error\x18\x02 \x01(\x0B2#.centrifugal.centrifugo.proxy.Error\x12<\x0A\x0Adisconnect\x18\x03 \x01(\x0B2(.centrifugal.centrifugo.proxy.Disconnect\"\x87\x01\x0A\x11SubRefreshRequest\x12\x0E\x0A\x06client\x18\x01 \x01(\x09\x12\x11\x0A\x09transport\x18\x02 \x01(\x09\x12\x10\x0A\x08protocol\x18\x03 \x01(\x09\x12\x10\x0A\x08encoding\x18\x04 \x01(\x09\x12\x0C\x0A\x04user\x18\x0A \x01(\x09\x12\x0F\x0A\x07channel\x18\x0B \x01(\x09\x12\x0C\x0A\x04meta\x18\x0C \x01(\x0C\"U\x0A\x10SubRefreshResult\x12\x0F\x0A\x07expired\x18\x01 \x01(\x08\x12\x11\x0A\x09expire_at\x18\x02 \x01(\x03\x12\x0C\x0A\x04info\x18\x03 \x01(\x0C\x12\x0F\x0A\x07b64info\x18\x04 \x01(\x09\"\xC6\x01\x0A\x12SubRefreshResponse\x12>\x0A\x06result\x18\x01 \x01(\x0B2..centrifugal.centrifugo.proxy.SubRefreshResult\x122\x0A\x05error\x18\x02 \x01(\x0B2#.centrifugal.centrifugo.proxy.Error\x12<\x0A\x0Adisconnect\x18\x03 \x01(\x0B2(.centrifugal.centrifugo.proxy.Disconnect\"\xA9\x01\x0A\x0BPublication\x12\x0C\x0A\x04data\x18\x04 \x01(\x0C\x12A\x0A\x04tags\x18\x07 \x03(\x0B23.centrifugal.centrifugo.proxy.Publication.TagsEntry\x1A+\x0A\x09TagsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01J\x04\x08\x01\x10\x02J\x04\x08\x02\x10\x03J\x04\x08\x03\x10\x04J\x04\x08\x05\x10\x06J\x04\x08\x06\x10\x07\"\xA3\x01\x0A\x16StreamSubscribeRequest\x12I\x0A\x11subscribe_request\x18\x01 \x01(\x0B2..centrifugal.centrifugo.proxy.SubscribeRequest\x12>\x0A\x0Bpublication\x18\x02 \x01(\x0B2).centrifugal.centrifugo.proxy.Publication\"\xA6\x01\x0A\x17StreamSubscribeResponse\x12K\x0A\x12subscribe_response\x18\x01 \x01(\x0B2/.centrifugal.centrifugo.proxy.SubscribeResponse\x12>\x0A\x0Bpublication\x18\x02 \x01(\x0B2).centrifugal.centrifugo.proxy.Publication\"W\x0A\x19NotifyChannelStateRequest\x12:\x0A\x06events\x18\x01 \x03(\x0B2*.centrifugal.centrifugo.proxy.ChannelEvent\">\x0A\x0CChannelEvent\x12\x0F\x0A\x07time_ms\x18\x01 \x01(\x03\x12\x0F\x0A\x07channel\x18\x02 \x01(\x09\x12\x0C\x0A\x04type\x18\x03 \x01(\x09\"\x98\x01\x0A\x1ANotifyChannelStateResponse\x12F\x0A\x06result\x18\x01 \x01(\x0B26.centrifugal.centrifugo.proxy.NotifyChannelStateResult\x122\x0A\x05error\x18\x02 \x01(\x0B2#.centrifugal.centrifugo.proxy.Error\"\x1A\x0A\x18NotifyChannelStateResult2\x9F\x08\x0A\x0FCentrifugoProxy\x12f\x0A\x07Connect\x12,.centrifugal.centrifugo.proxy.ConnectRequest\x1A-.centrifugal.centrifugo.proxy.ConnectResponse\x12f\x0A\x07Refresh\x12,.centrifugal.centrifugo.proxy.RefreshRequest\x1A-.centrifugal.centrifugo.proxy.RefreshResponse\x12l\x0A\x09Subscribe\x12..centrifugal.centrifugo.proxy.SubscribeRequest\x1A/.centrifugal.centrifugo.proxy.SubscribeResponse\x12f\x0A\x07Publish\x12,.centrifugal.centrifugo.proxy.PublishRequest\x1A-.centrifugal.centrifugo.proxy.PublishResponse\x12Z\x0A\x03RPC\x12(.centrifugal.centrifugo.proxy.RPCRequest\x1A).centrifugal.centrifugo.proxy.RPCResponse\x12o\x0A\x0ASubRefresh\x12/.centrifugal.centrifugo.proxy.SubRefreshRequest\x1A0.centrifugal.centrifugo.proxy.SubRefreshResponse\x12\x82\x01\x0A\x17SubscribeUnidirectional\x12..centrifugal.centrifugo.proxy.SubscribeRequest\x1A5.centrifugal.centrifugo.proxy.StreamSubscribeResponse0\x01\x12\x89\x01\x0A\x16SubscribeBidirectional\x124.centrifugal.centrifugo.proxy.StreamSubscribeRequest\x1A5.centrifugal.centrifugo.proxy.StreamSubscribeResponse(\x010\x01\x12\x87\x01\x0A\x12NotifyChannelState\x127.centrifugal.centrifugo.proxy.NotifyChannelStateRequest\x1A8.centrifugal.centrifugo.proxy.NotifyChannelStateResponseBmZ\x13centrifugo/proxy/v1\xCA\x02#RoadRunner\\Centrifugal\\Proxy\\DTO\\V1\xE2\x02/RoadRunner\\Centrifugal\\Proxy\\DTO\\V1\\GPBMetadatab\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}
