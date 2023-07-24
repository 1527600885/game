<?php
// This file was auto-generated from sdk-root/src/data/ivs-realtime/2020-07-14/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-07-14', 'endpointPrefix' => 'ivsrealtime', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'ivsrealtime', 'serviceFullName' => 'Amazon Interactive Video Service RealTime', 'serviceId' => 'IVS RealTime', 'signatureVersion' => 'v4', 'signingName' => 'ivs', 'uid' => 'ivs-realtime-2020-07-14', ], 'operations' => [ 'CreateParticipantToken' => [ 'name' => 'CreateParticipantToken', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateParticipantToken', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateParticipantTokenRequest', ], 'output' => [ 'shape' => 'CreateParticipantTokenResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'PendingVerification', ], ], ], 'CreateStage' => [ 'name' => 'CreateStage', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateStage', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateStageRequest', ], 'output' => [ 'shape' => 'CreateStageResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'PendingVerification', ], ], ], 'DeleteStage' => [ 'name' => 'DeleteStage', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteStage', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteStageRequest', ], 'output' => [ 'shape' => 'DeleteStageResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'PendingVerification', ], ], ], 'DisconnectParticipant' => [ 'name' => 'DisconnectParticipant', 'http' => [ 'method' => 'POST', 'requestUri' => '/DisconnectParticipant', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DisconnectParticipantRequest', ], 'output' => [ 'shape' => 'DisconnectParticipantResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'PendingVerification', ], ], ], 'GetStage' => [ 'name' => 'GetStage', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetStage', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetStageRequest', ], 'output' => [ 'shape' => 'GetStageResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListStages' => [ 'name' => 'ListStages', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListStages', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListStagesRequest', ], 'output' => [ 'shape' => 'ListStagesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'UpdateStage' => [ 'name' => 'UpdateStage', 'http' => [ 'method' => 'POST', 'requestUri' => '/UpdateStage', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateStageRequest', ], 'output' => [ 'shape' => 'UpdateStageResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'PendingVerification', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateParticipantTokenRequest' => [ 'type' => 'structure', 'required' => [ 'stageArn', ], 'members' => [ 'attributes' => [ 'shape' => 'ParticipantTokenAttributes', ], 'capabilities' => [ 'shape' => 'ParticipantTokenCapabilities', ], 'duration' => [ 'shape' => 'ParticipantTokenDurationMinutes', ], 'stageArn' => [ 'shape' => 'StageArn', ], 'userId' => [ 'shape' => 'ParticipantTokenUserId', ], ], ], 'CreateParticipantTokenResponse' => [ 'type' => 'structure', 'members' => [ 'participantToken' => [ 'shape' => 'ParticipantToken', ], ], ], 'CreateStageRequest' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'StageName', ], 'participantTokenConfigurations' => [ 'shape' => 'ParticipantTokenConfigurations', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'CreateStageResponse' => [ 'type' => 'structure', 'members' => [ 'participantTokens' => [ 'shape' => 'ParticipantTokenList', ], 'stage' => [ 'shape' => 'Stage', ], ], ], 'DeleteStageRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'StageArn', ], ], ], 'DeleteStageResponse' => [ 'type' => 'structure', 'members' => [], ], 'DisconnectParticipantReason' => [ 'type' => 'string', 'max' => 128, 'min' => 0, ], 'DisconnectParticipantRequest' => [ 'type' => 'structure', 'required' => [ 'participantId', 'stageArn', ], 'members' => [ 'participantId' => [ 'shape' => 'ParticipantTokenId', ], 'reason' => [ 'shape' => 'DisconnectParticipantReason', ], 'stageArn' => [ 'shape' => 'StageArn', ], ], ], 'DisconnectParticipantResponse' => [ 'type' => 'structure', 'members' => [], ], 'GetStageRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'StageArn', ], ], ], 'GetStageResponse' => [ 'type' => 'structure', 'members' => [ 'stage' => [ 'shape' => 'Stage', ], ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'ListStagesRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'MaxStageResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListStagesResponse' => [ 'type' => 'structure', 'required' => [ 'stages', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'stages' => [ 'shape' => 'StageSummaryList', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'required' => [ 'tags', ], 'members' => [ 'tags' => [ 'shape' => 'Tags', ], ], ], 'MaxStageResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, 'pattern' => '^[a-zA-Z0-9+/=_-]*$', ], 'ParticipantToken' => [ 'type' => 'structure', 'members' => [ 'attributes' => [ 'shape' => 'ParticipantTokenAttributes', ], 'capabilities' => [ 'shape' => 'ParticipantTokenCapabilities', ], 'duration' => [ 'shape' => 'ParticipantTokenDurationMinutes', ], 'expirationTime' => [ 'shape' => 'ParticipantTokenExpirationTime', ], 'participantId' => [ 'shape' => 'ParticipantTokenId', ], 'token' => [ 'shape' => 'ParticipantTokenString', ], 'userId' => [ 'shape' => 'ParticipantTokenUserId', ], ], ], 'ParticipantTokenAttributes' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'ParticipantTokenCapabilities' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParticipantTokenCapability', ], 'max' => 2, 'min' => 0, ], 'ParticipantTokenCapability' => [ 'type' => 'string', 'enum' => [ 'PUBLISH', 'SUBSCRIBE', ], ], 'ParticipantTokenConfiguration' => [ 'type' => 'structure', 'members' => [ 'attributes' => [ 'shape' => 'ParticipantTokenAttributes', ], 'capabilities' => [ 'shape' => 'ParticipantTokenCapabilities', ], 'duration' => [ 'shape' => 'ParticipantTokenDurationMinutes', ], 'userId' => [ 'shape' => 'ParticipantTokenUserId', ], ], ], 'ParticipantTokenConfigurations' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParticipantTokenConfiguration', ], 'max' => 12, 'min' => 0, ], 'ParticipantTokenDurationMinutes' => [ 'type' => 'integer', 'max' => 20160, 'min' => 1, ], 'ParticipantTokenExpirationTime' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'ParticipantTokenId' => [ 'type' => 'string', ], 'ParticipantTokenList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParticipantToken', ], ], 'ParticipantTokenString' => [ 'type' => 'string', 'sensitive' => true, ], 'ParticipantTokenUserId' => [ 'type' => 'string', 'max' => 128, 'min' => 0, ], 'PendingVerification' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'ResourceArn' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^arn:aws:[is]vs:[a-z0-9-]+:[0-9]+:[a-z-]/[a-zA-Z0-9-]+$', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'Stage' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'activeSessionId' => [ 'shape' => 'StageSessionId', ], 'arn' => [ 'shape' => 'StageArn', ], 'name' => [ 'shape' => 'StageName', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'StageArn' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^arn:aws:ivs:[a-z0-9-]+:[0-9]+:stage/[a-zA-Z0-9-]+$', ], 'StageName' => [ 'type' => 'string', 'max' => 128, 'min' => 0, 'pattern' => '^[a-zA-Z0-9-_]*$', ], 'StageSessionId' => [ 'type' => 'string', 'max' => 16, 'min' => 16, 'pattern' => '^st-[a-zA-Z0-9]+$', ], 'StageSummary' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'activeSessionId' => [ 'shape' => 'StageSessionId', ], 'arn' => [ 'shape' => 'StageArn', ], 'name' => [ 'shape' => 'StageName', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'StageSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StageSummary', ], ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 0, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateStageRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'StageArn', ], 'name' => [ 'shape' => 'StageName', ], ], ], 'UpdateStageResponse' => [ 'type' => 'structure', 'members' => [ 'stage' => [ 'shape' => 'Stage', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'errorMessage' => [ 'type' => 'string', ], ],];
