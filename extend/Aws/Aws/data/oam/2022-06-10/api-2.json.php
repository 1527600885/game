<?php
// This file was auto-generated from sdk-root/src/data/oam/2022-06-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2022-06-10', 'endpointPrefix' => 'oam', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'CloudWatch Observability Access Manager', 'serviceId' => 'OAM', 'signatureVersion' => 'v4', 'signingName' => 'oam', 'uid' => 'oam-2022-06-10', ], 'operations' => [ 'CreateLink' => [ 'name' => 'CreateLink', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateLink', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateLinkInput', ], 'output' => [ 'shape' => 'CreateLinkOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InvalidParameterException', ], ], ], 'CreateSink' => [ 'name' => 'CreateSink', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateSink', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateSinkInput', ], 'output' => [ 'shape' => 'CreateSinkOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InvalidParameterException', ], ], ], 'DeleteLink' => [ 'name' => 'DeleteLink', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteLink', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteLinkInput', ], 'output' => [ 'shape' => 'DeleteLinkOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DeleteSink' => [ 'name' => 'DeleteSink', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteSink', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteSinkInput', ], 'output' => [ 'shape' => 'DeleteSinkOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetLink' => [ 'name' => 'GetLink', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetLink', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetLinkInput', ], 'output' => [ 'shape' => 'GetLinkOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetSink' => [ 'name' => 'GetSink', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetSink', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetSinkInput', ], 'output' => [ 'shape' => 'GetSinkOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetSinkPolicy' => [ 'name' => 'GetSinkPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetSinkPolicy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetSinkPolicyInput', ], 'output' => [ 'shape' => 'GetSinkPolicyOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListAttachedLinks' => [ 'name' => 'ListAttachedLinks', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListAttachedLinks', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListAttachedLinksInput', ], 'output' => [ 'shape' => 'ListAttachedLinksOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListLinks' => [ 'name' => 'ListLinks', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListLinks', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListLinksInput', ], 'output' => [ 'shape' => 'ListLinksOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListSinks' => [ 'name' => 'ListSinks', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListSinks', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListSinksInput', ], 'output' => [ 'shape' => 'ListSinksOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceInput', ], 'output' => [ 'shape' => 'ListTagsForResourceOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'PutSinkPolicy' => [ 'name' => 'PutSinkPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/PutSinkPolicy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutSinkPolicyInput', ], 'output' => [ 'shape' => 'PutSinkPolicyOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'PUT', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceInput', ], 'output' => [ 'shape' => 'TagResourceOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceInput', ], 'output' => [ 'shape' => 'UntagResourceOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateLink' => [ 'name' => 'UpdateLink', 'http' => [ 'method' => 'POST', 'requestUri' => '/UpdateLink', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateLinkInput', ], 'output' => [ 'shape' => 'UpdateLinkOutput', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], ], 'shapes' => [ 'Arn' => [ 'type' => 'string', 'pattern' => 'arn:(\\w|-)+:oam:.+:.+:.+.*', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'amznErrorType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateLinkInput' => [ 'type' => 'structure', 'required' => [ 'LabelTemplate', 'ResourceTypes', 'SinkIdentifier', ], 'members' => [ 'LabelTemplate' => [ 'shape' => 'LabelTemplate', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypesInput', ], 'SinkIdentifier' => [ 'shape' => 'ResourceIdentifier', ], 'Tags' => [ 'shape' => 'TagMapInput', ], ], ], 'CreateLinkOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Id' => [ 'shape' => 'String', ], 'Label' => [ 'shape' => 'String', ], 'LabelTemplate' => [ 'shape' => 'String', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypesOutput', ], 'SinkArn' => [ 'shape' => 'String', ], 'Tags' => [ 'shape' => 'TagMapOutput', ], ], ], 'CreateSinkInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'SinkName', ], 'Tags' => [ 'shape' => 'TagMapInput', ], ], ], 'CreateSinkOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Id' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'String', ], 'Tags' => [ 'shape' => 'TagMapOutput', ], ], ], 'DeleteLinkInput' => [ 'type' => 'structure', 'required' => [ 'Identifier', ], 'members' => [ 'Identifier' => [ 'shape' => 'ResourceIdentifier', ], ], ], 'DeleteLinkOutput' => [ 'type' => 'structure', 'members' => [], ], 'DeleteSinkInput' => [ 'type' => 'structure', 'required' => [ 'Identifier', ], 'members' => [ 'Identifier' => [ 'shape' => 'ResourceIdentifier', ], ], ], 'DeleteSinkOutput' => [ 'type' => 'structure', 'members' => [], ], 'GetLinkInput' => [ 'type' => 'structure', 'required' => [ 'Identifier', ], 'members' => [ 'Identifier' => [ 'shape' => 'ResourceIdentifier', ], ], ], 'GetLinkOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Id' => [ 'shape' => 'String', ], 'Label' => [ 'shape' => 'String', ], 'LabelTemplate' => [ 'shape' => 'String', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypesOutput', ], 'SinkArn' => [ 'shape' => 'String', ], 'Tags' => [ 'shape' => 'TagMapOutput', ], ], ], 'GetSinkInput' => [ 'type' => 'structure', 'required' => [ 'Identifier', ], 'members' => [ 'Identifier' => [ 'shape' => 'ResourceIdentifier', ], ], ], 'GetSinkOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Id' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'String', ], 'Tags' => [ 'shape' => 'TagMapOutput', ], ], ], 'GetSinkPolicyInput' => [ 'type' => 'structure', 'required' => [ 'SinkIdentifier', ], 'members' => [ 'SinkIdentifier' => [ 'shape' => 'ResourceIdentifier', ], ], ], 'GetSinkPolicyOutput' => [ 'type' => 'structure', 'members' => [ 'SinkArn' => [ 'shape' => 'String', ], 'SinkId' => [ 'shape' => 'String', ], 'Policy' => [ 'shape' => 'String', ], ], ], 'InternalServiceFault' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'amznErrorType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], 'amznErrorType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'LabelTemplate' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'ListAttachedLinksInput' => [ 'type' => 'structure', 'required' => [ 'SinkIdentifier', ], 'members' => [ 'MaxResults' => [ 'shape' => 'ListAttachedLinksMaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'SinkIdentifier' => [ 'shape' => 'ResourceIdentifier', ], ], ], 'ListAttachedLinksItem' => [ 'type' => 'structure', 'members' => [ 'Label' => [ 'shape' => 'String', ], 'LinkArn' => [ 'shape' => 'String', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypesOutput', ], ], ], 'ListAttachedLinksItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListAttachedLinksItem', ], ], 'ListAttachedLinksMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'ListAttachedLinksOutput' => [ 'type' => 'structure', 'required' => [ 'Items', ], 'members' => [ 'Items' => [ 'shape' => 'ListAttachedLinksItems', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListLinksInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListLinksMaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListLinksItem' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Id' => [ 'shape' => 'String', ], 'Label' => [ 'shape' => 'String', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypesOutput', ], 'SinkArn' => [ 'shape' => 'String', ], ], ], 'ListLinksItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListLinksItem', ], ], 'ListLinksMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 5, 'min' => 1, ], 'ListLinksOutput' => [ 'type' => 'structure', 'required' => [ 'Items', ], 'members' => [ 'Items' => [ 'shape' => 'ListLinksItems', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListSinksInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListSinksMaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListSinksItem' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Id' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'String', ], ], ], 'ListSinksItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListSinksItem', ], ], 'ListSinksMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'ListSinksOutput' => [ 'type' => 'structure', 'required' => [ 'Items', ], 'members' => [ 'Items' => [ 'shape' => 'ListSinksItems', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListTagsForResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], ], ], 'ListTagsForResourceOutput' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMapOutput', ], ], ], 'MissingRequiredParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], 'amznErrorType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'NextToken' => [ 'type' => 'string', ], 'PutSinkPolicyInput' => [ 'type' => 'structure', 'required' => [ 'SinkIdentifier', 'Policy', ], 'members' => [ 'SinkIdentifier' => [ 'shape' => 'ResourceIdentifier', ], 'Policy' => [ 'shape' => 'SinkPolicy', ], ], ], 'PutSinkPolicyOutput' => [ 'type' => 'structure', 'members' => [ 'SinkArn' => [ 'shape' => 'String', ], 'SinkId' => [ 'shape' => 'String', ], 'Policy' => [ 'shape' => 'String', ], ], ], 'ResourceIdentifier' => [ 'type' => 'string', 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_:\\.\\-\\/]{0,2047}', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'amznErrorType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'AWS::CloudWatch::Metric', 'AWS::Logs::LogGroup', 'AWS::XRay::Trace', ], ], 'ResourceTypesInput' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceType', ], 'max' => 50, 'min' => 1, ], 'ResourceTypesOutput' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'amznErrorType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'SinkName' => [ 'type' => 'string', 'pattern' => '[a-zA-Z0-9_\\.\\-]{1,255}', ], 'SinkPolicy' => [ 'type' => 'string', ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagMapInput' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 0, ], 'TagMapOutput' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'TagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'Tags' => [ 'shape' => 'TagMapInput', ], ], ], 'TagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'TooManyTagsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'UntagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateLinkInput' => [ 'type' => 'structure', 'required' => [ 'Identifier', 'ResourceTypes', ], 'members' => [ 'Identifier' => [ 'shape' => 'ResourceIdentifier', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypesInput', ], ], ], 'UpdateLinkOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Id' => [ 'shape' => 'String', ], 'Label' => [ 'shape' => 'String', ], 'LabelTemplate' => [ 'shape' => 'LabelTemplate', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypesOutput', ], 'SinkArn' => [ 'shape' => 'String', ], 'Tags' => [ 'shape' => 'TagMapOutput', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
