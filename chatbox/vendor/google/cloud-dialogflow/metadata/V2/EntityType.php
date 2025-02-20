<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class EntityType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�2
,google/cloud/dialogflow/v2/entity_type.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.proto"�

EntityType
name (	
display_name (	B�A>
kind (2+.google.cloud.dialogflow.v2.EntityType.KindB�AZ
auto_expansion_mode (28.google.cloud.dialogflow.v2.EntityType.AutoExpansionModeB�AD
entities (2-.google.cloud.dialogflow.v2.EntityType.EntityB�A$
enable_fuzzy_extraction (B�A3
Entity
value (	B�A
synonyms (	B�A"J
Kind
KIND_UNSPECIFIED 
KIND_MAP
	KIND_LIST
KIND_REGEXP"Y
AutoExpansionMode#
AUTO_EXPANSION_MODE_UNSPECIFIED 
AUTO_EXPANSION_MODE_DEFAULT:��A�
$dialogflow.googleapis.com/EntityType2projects/{project}/agent/entityTypes/{entity_type}Gprojects/{project}/locations/{location}/agent/entityTypes/{entity_type}"�
ListEntityTypesRequest<
parent (	B,�A�A&$dialogflow.googleapis.com/EntityType
language_code (	B�A
	page_size (B�A

page_token (	B�A"p
ListEntityTypesResponse<
entity_types (2&.google.cloud.dialogflow.v2.EntityType
next_page_token (	"n
GetEntityTypeRequest:
name (	B,�A�A&
$dialogflow.googleapis.com/EntityType
language_code (	B�A"�
CreateEntityTypeRequest<
parent (	B,�A�A&$dialogflow.googleapis.com/EntityType@
entity_type (2&.google.cloud.dialogflow.v2.EntityTypeB�A
language_code (	B�A"�
UpdateEntityTypeRequest@
entity_type (2&.google.cloud.dialogflow.v2.EntityTypeB�A
language_code (	B�A4
update_mask (2.google.protobuf.FieldMaskB�A"U
DeleteEntityTypeRequest:
name (	B,�A�A&
$dialogflow.googleapis.com/EntityType"�
BatchUpdateEntityTypesRequest<
parent (	B,�A�A&$dialogflow.googleapis.com/EntityType
entity_type_batch_uri (	H O
entity_type_batch_inline (2+.google.cloud.dialogflow.v2.EntityTypeBatchH 
language_code (	B�A4
update_mask (2.google.protobuf.FieldMaskB�AB
entity_type_batch"^
BatchUpdateEntityTypesResponse<
entity_types (2&.google.cloud.dialogflow.v2.EntityType"}
BatchDeleteEntityTypesRequest<
parent (	B,�A�A&$dialogflow.googleapis.com/EntityType
entity_type_names (	B�A"�
BatchCreateEntitiesRequest<
parent (	B,�A�A&
$dialogflow.googleapis.com/EntityTypeD
entities (2-.google.cloud.dialogflow.v2.EntityType.EntityB�A
language_code (	B�A"�
BatchUpdateEntitiesRequest<
parent (	B,�A�A&
$dialogflow.googleapis.com/EntityTypeD
entities (2-.google.cloud.dialogflow.v2.EntityType.EntityB�A
language_code (	B�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
BatchDeleteEntitiesRequest<
parent (	B,�A�A&
$dialogflow.googleapis.com/EntityType
entity_values (	B�A
language_code (	B�A"O
EntityTypeBatch<
entity_types (2&.google.cloud.dialogflow.v2.EntityType2�
EntityTypes�
ListEntityTypes2.google.cloud.dialogflow.v2.ListEntityTypesRequest3.google.cloud.dialogflow.v2.ListEntityTypesResponse"��Aparent�Aparent,language_code���d)/v2/{parent=projects/*/agent}/entityTypesZ75/v2/{parent=projects/*/locations/*/agent}/entityTypes�
GetEntityType0.google.cloud.dialogflow.v2.GetEntityTypeRequest&.google.cloud.dialogflow.v2.EntityType"��Aname�Aname,language_code���d)/v2/{name=projects/*/agent/entityTypes/*}Z75/v2/{name=projects/*/locations/*/agent/entityTypes/*}�
CreateEntityType3.google.cloud.dialogflow.v2.CreateEntityTypeRequest&.google.cloud.dialogflow.v2.EntityType"��Aparent,entity_type�A parent,entity_type,language_code���~")/v2/{parent=projects/*/agent}/entityTypes:entity_typeZD"5/v2/{parent=projects/*/locations/*/agent}/entityTypes:entity_type�
UpdateEntityType3.google.cloud.dialogflow.v2.UpdateEntityTypeRequest&.google.cloud.dialogflow.v2.EntityType"��Aentity_type�Aentity_type,language_code����25/v2/{entity_type.name=projects/*/agent/entityTypes/*}:entity_typeZP2A/v2/{entity_type.name=projects/*/locations/*/agent/entityTypes/*}:entity_type�
DeleteEntityType3.google.cloud.dialogflow.v2.DeleteEntityTypeRequest.google.protobuf.Empty"q�Aname���d*)/v2/{name=projects/*/agent/entityTypes/*}Z7*5/v2/{name=projects/*/locations/*/agent/entityTypes/*}�
BatchUpdateEntityTypes9.google.cloud.dialogflow.v2.BatchUpdateEntityTypesRequest.google.longrunning.Operation"��AS
9google.cloud.dialogflow.v2.BatchUpdateEntityTypesResponsegoogle.protobuf.Struct����"5/v2/{parent=projects/*/agent}/entityTypes:batchUpdate:*ZF"A/v2/{parent=projects/*/locations/*/agent}/entityTypes:batchUpdate:*�
BatchDeleteEntityTypes9.google.cloud.dialogflow.v2.BatchDeleteEntityTypesRequest.google.longrunning.Operation"��A/
google.protobuf.Emptygoogle.protobuf.Struct�Aparent,entity_type_names����"5/v2/{parent=projects/*/agent}/entityTypes:batchDelete:*ZF"A/v2/{parent=projects/*/locations/*/agent}/entityTypes:batchDelete:*�
BatchCreateEntities6.google.cloud.dialogflow.v2.BatchCreateEntitiesRequest.google.longrunning.Operation"��A/
google.protobuf.Emptygoogle.protobuf.Struct�Aparent,entities�Aparent,entities,language_code����"@/v2/{parent=projects/*/agent/entityTypes/*}/entities:batchCreate:*ZQ"L/v2/{parent=projects/*/locations/*/agent/entityTypes/*}/entities:batchCreate:*�
BatchUpdateEntities6.google.cloud.dialogflow.v2.BatchUpdateEntitiesRequest.google.longrunning.Operation"��A/
google.protobuf.Emptygoogle.protobuf.Struct�Aparent,entities�Aparent,entities,language_code����"@/v2/{parent=projects/*/agent/entityTypes/*}/entities:batchUpdate:*ZQ"L/v2/{parent=projects/*/locations/*/agent/entityTypes/*}/entities:batchUpdate:*�
BatchDeleteEntities6.google.cloud.dialogflow.v2.BatchDeleteEntitiesRequest.google.longrunning.Operation"��A/
google.protobuf.Emptygoogle.protobuf.Struct�Aparent,entity_values�A"parent,entity_values,language_code����"@/v2/{parent=projects/*/agent/entityTypes/*}/entities:batchDelete:*ZQ"L/v2/{parent=projects/*/locations/*/agent/entityTypes/*}/entities:batchDelete:*x�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BEntityTypeProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb�DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

