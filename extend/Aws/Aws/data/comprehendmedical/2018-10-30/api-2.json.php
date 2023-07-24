<?php
// This file was auto-generated from sdk-root/src/data/comprehendmedical/2018-10-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-10-30', 'endpointPrefix' => 'comprehendmedical', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'ComprehendMedical', 'serviceFullName' => 'AWS Comprehend Medical', 'serviceId' => 'ComprehendMedical', 'signatureVersion' => 'v4', 'signingName' => 'comprehendmedical', 'targetPrefix' => 'ComprehendMedical_20181030', 'uid' => 'comprehendmedical-2018-10-30', ], 'operations' => [ 'DescribeEntitiesDetectionV2Job' => [ 'name' => 'DescribeEntitiesDetectionV2Job', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEntitiesDetectionV2JobRequest', ], 'output' => [ 'shape' => 'DescribeEntitiesDetectionV2JobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeICD10CMInferenceJob' => [ 'name' => 'DescribeICD10CMInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeICD10CMInferenceJobRequest', ], 'output' => [ 'shape' => 'DescribeICD10CMInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribePHIDetectionJob' => [ 'name' => 'DescribePHIDetectionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribePHIDetectionJobRequest', ], 'output' => [ 'shape' => 'DescribePHIDetectionJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeRxNormInferenceJob' => [ 'name' => 'DescribeRxNormInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeRxNormInferenceJobRequest', ], 'output' => [ 'shape' => 'DescribeRxNormInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeSNOMEDCTInferenceJob' => [ 'name' => 'DescribeSNOMEDCTInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeSNOMEDCTInferenceJobRequest', ], 'output' => [ 'shape' => 'DescribeSNOMEDCTInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DetectEntities' => [ 'name' => 'DetectEntities', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DetectEntitiesRequest', ], 'output' => [ 'shape' => 'DetectEntitiesResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidEncodingException', ], [ 'shape' => 'TextSizeLimitExceededException', ], ], 'deprecated' => true, 'deprecatedMessage' => 'This operation is deprecated, use DetectEntitiesV2 instead.', ], 'DetectEntitiesV2' => [ 'name' => 'DetectEntitiesV2', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DetectEntitiesV2Request', ], 'output' => [ 'shape' => 'DetectEntitiesV2Response', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidEncodingException', ], [ 'shape' => 'TextSizeLimitExceededException', ], ], ], 'DetectPHI' => [ 'name' => 'DetectPHI', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DetectPHIRequest', ], 'output' => [ 'shape' => 'DetectPHIResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidEncodingException', ], [ 'shape' => 'TextSizeLimitExceededException', ], ], ], 'InferICD10CM' => [ 'name' => 'InferICD10CM', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'InferICD10CMRequest', ], 'output' => [ 'shape' => 'InferICD10CMResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidEncodingException', ], [ 'shape' => 'TextSizeLimitExceededException', ], ], ], 'InferRxNorm' => [ 'name' => 'InferRxNorm', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'InferRxNormRequest', ], 'output' => [ 'shape' => 'InferRxNormResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidEncodingException', ], [ 'shape' => 'TextSizeLimitExceededException', ], ], ], 'InferSNOMEDCT' => [ 'name' => 'InferSNOMEDCT', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'InferSNOMEDCTRequest', ], 'output' => [ 'shape' => 'InferSNOMEDCTResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidEncodingException', ], [ 'shape' => 'TextSizeLimitExceededException', ], ], ], 'ListEntitiesDetectionV2Jobs' => [ 'name' => 'ListEntitiesDetectionV2Jobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListEntitiesDetectionV2JobsRequest', ], 'output' => [ 'shape' => 'ListEntitiesDetectionV2JobsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListICD10CMInferenceJobs' => [ 'name' => 'ListICD10CMInferenceJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListICD10CMInferenceJobsRequest', ], 'output' => [ 'shape' => 'ListICD10CMInferenceJobsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListPHIDetectionJobs' => [ 'name' => 'ListPHIDetectionJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListPHIDetectionJobsRequest', ], 'output' => [ 'shape' => 'ListPHIDetectionJobsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListRxNormInferenceJobs' => [ 'name' => 'ListRxNormInferenceJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListRxNormInferenceJobsRequest', ], 'output' => [ 'shape' => 'ListRxNormInferenceJobsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListSNOMEDCTInferenceJobs' => [ 'name' => 'ListSNOMEDCTInferenceJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListSNOMEDCTInferenceJobsRequest', ], 'output' => [ 'shape' => 'ListSNOMEDCTInferenceJobsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartEntitiesDetectionV2Job' => [ 'name' => 'StartEntitiesDetectionV2Job', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartEntitiesDetectionV2JobRequest', ], 'output' => [ 'shape' => 'StartEntitiesDetectionV2JobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartICD10CMInferenceJob' => [ 'name' => 'StartICD10CMInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartICD10CMInferenceJobRequest', ], 'output' => [ 'shape' => 'StartICD10CMInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartPHIDetectionJob' => [ 'name' => 'StartPHIDetectionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartPHIDetectionJobRequest', ], 'output' => [ 'shape' => 'StartPHIDetectionJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartRxNormInferenceJob' => [ 'name' => 'StartRxNormInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartRxNormInferenceJobRequest', ], 'output' => [ 'shape' => 'StartRxNormInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartSNOMEDCTInferenceJob' => [ 'name' => 'StartSNOMEDCTInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartSNOMEDCTInferenceJobRequest', ], 'output' => [ 'shape' => 'StartSNOMEDCTInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopEntitiesDetectionV2Job' => [ 'name' => 'StopEntitiesDetectionV2Job', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopEntitiesDetectionV2JobRequest', ], 'output' => [ 'shape' => 'StopEntitiesDetectionV2JobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopICD10CMInferenceJob' => [ 'name' => 'StopICD10CMInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopICD10CMInferenceJobRequest', ], 'output' => [ 'shape' => 'StopICD10CMInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopPHIDetectionJob' => [ 'name' => 'StopPHIDetectionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopPHIDetectionJobRequest', ], 'output' => [ 'shape' => 'StopPHIDetectionJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopRxNormInferenceJob' => [ 'name' => 'StopRxNormInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopRxNormInferenceJobRequest', ], 'output' => [ 'shape' => 'StopRxNormInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopSNOMEDCTInferenceJob' => [ 'name' => 'StopSNOMEDCTInferenceJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopSNOMEDCTInferenceJobRequest', ], 'output' => [ 'shape' => 'StopSNOMEDCTInferenceJobResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AnyLengthString' => [ 'type' => 'string', ], 'Attribute' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'EntitySubType', ], 'Score' => [ 'shape' => 'Float', ], 'RelationshipScore' => [ 'shape' => 'Float', ], 'RelationshipType' => [ 'shape' => 'RelationshipType', ], 'Id' => [ 'shape' => 'Integer', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Text' => [ 'shape' => 'String', ], 'Category' => [ 'shape' => 'EntityType', ], 'Traits' => [ 'shape' => 'TraitList', ], ], ], 'AttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attribute', ], ], 'AttributeName' => [ 'type' => 'string', 'enum' => [ 'SIGN', 'SYMPTOM', 'DIAGNOSIS', 'NEGATION', 'PERTAINS_TO_FAMILY', 'HYPOTHETICAL', 'LOW_CONFIDENCE', 'PAST_HISTORY', 'FUTURE', ], ], 'BoundedLengthString' => [ 'type' => 'string', 'max' => 20000, 'min' => 1, ], 'Characters' => [ 'type' => 'structure', 'members' => [ 'OriginalTextCharacters' => [ 'shape' => 'Integer', ], ], ], 'ClientRequestTokenString' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-]+$', ], 'ComprehendMedicalAsyncJobFilter' => [ 'type' => 'structure', 'members' => [ 'JobName' => [ 'shape' => 'JobName', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'SubmitTimeBefore' => [ 'shape' => 'Timestamp', ], 'SubmitTimeAfter' => [ 'shape' => 'Timestamp', ], ], ], 'ComprehendMedicalAsyncJobProperties' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobName' => [ 'shape' => 'JobName', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'Message' => [ 'shape' => 'AnyLengthString', ], 'SubmitTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'ExpirationTime' => [ 'shape' => 'Timestamp', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'ManifestFilePath' => [ 'shape' => 'ManifestFilePath', ], 'KMSKey' => [ 'shape' => 'KMSKey', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', ], ], ], 'ComprehendMedicalAsyncJobPropertiesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComprehendMedicalAsyncJobProperties', ], ], 'DescribeEntitiesDetectionV2JobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeEntitiesDetectionV2JobResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobProperties' => [ 'shape' => 'ComprehendMedicalAsyncJobProperties', ], ], ], 'DescribeICD10CMInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeICD10CMInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobProperties' => [ 'shape' => 'ComprehendMedicalAsyncJobProperties', ], ], ], 'DescribePHIDetectionJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribePHIDetectionJobResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobProperties' => [ 'shape' => 'ComprehendMedicalAsyncJobProperties', ], ], ], 'DescribeRxNormInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeRxNormInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobProperties' => [ 'shape' => 'ComprehendMedicalAsyncJobProperties', ], ], ], 'DescribeSNOMEDCTInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeSNOMEDCTInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobProperties' => [ 'shape' => 'ComprehendMedicalAsyncJobProperties', ], ], ], 'DetectEntitiesRequest' => [ 'type' => 'structure', 'required' => [ 'Text', ], 'members' => [ 'Text' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DetectEntitiesResponse' => [ 'type' => 'structure', 'required' => [ 'Entities', 'ModelVersion', ], 'members' => [ 'Entities' => [ 'shape' => 'EntityList', ], 'UnmappedAttributes' => [ 'shape' => 'UnmappedAttributeList', ], 'PaginationToken' => [ 'shape' => 'String', ], 'ModelVersion' => [ 'shape' => 'String', ], ], ], 'DetectEntitiesV2Request' => [ 'type' => 'structure', 'required' => [ 'Text', ], 'members' => [ 'Text' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DetectEntitiesV2Response' => [ 'type' => 'structure', 'required' => [ 'Entities', 'ModelVersion', ], 'members' => [ 'Entities' => [ 'shape' => 'EntityList', ], 'UnmappedAttributes' => [ 'shape' => 'UnmappedAttributeList', ], 'PaginationToken' => [ 'shape' => 'String', ], 'ModelVersion' => [ 'shape' => 'String', ], ], ], 'DetectPHIRequest' => [ 'type' => 'structure', 'required' => [ 'Text', ], 'members' => [ 'Text' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DetectPHIResponse' => [ 'type' => 'structure', 'required' => [ 'Entities', 'ModelVersion', ], 'members' => [ 'Entities' => [ 'shape' => 'EntityList', ], 'PaginationToken' => [ 'shape' => 'String', ], 'ModelVersion' => [ 'shape' => 'String', ], ], ], 'Entity' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'Integer', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Score' => [ 'shape' => 'Float', ], 'Text' => [ 'shape' => 'String', ], 'Category' => [ 'shape' => 'EntityType', ], 'Type' => [ 'shape' => 'EntitySubType', ], 'Traits' => [ 'shape' => 'TraitList', ], 'Attributes' => [ 'shape' => 'AttributeList', ], ], ], 'EntityList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Entity', ], ], 'EntitySubType' => [ 'type' => 'string', 'enum' => [ 'NAME', 'DX_NAME', 'DOSAGE', 'ROUTE_OR_MODE', 'FORM', 'FREQUENCY', 'DURATION', 'GENERIC_NAME', 'BRAND_NAME', 'STRENGTH', 'RATE', 'ACUITY', 'TEST_NAME', 'TEST_VALUE', 'TEST_UNITS', 'TEST_UNIT', 'PROCEDURE_NAME', 'TREATMENT_NAME', 'DATE', 'AGE', 'CONTACT_POINT', 'PHONE_OR_FAX', 'EMAIL', 'IDENTIFIER', 'ID', 'URL', 'ADDRESS', 'PROFESSION', 'SYSTEM_ORGAN_SITE', 'DIRECTION', 'QUALITY', 'QUANTITY', 'TIME_EXPRESSION', 'TIME_TO_MEDICATION_NAME', 'TIME_TO_DX_NAME', 'TIME_TO_TEST_NAME', 'TIME_TO_PROCEDURE_NAME', 'TIME_TO_TREATMENT_NAME', 'AMOUNT', 'GENDER', 'RACE_ETHNICITY', 'ALLERGIES', 'TOBACCO_USE', 'ALCOHOL_CONSUMPTION', 'REC_DRUG_USE', ], ], 'EntityType' => [ 'type' => 'string', 'enum' => [ 'MEDICATION', 'MEDICAL_CONDITION', 'PROTECTED_HEALTH_INFORMATION', 'TEST_TREATMENT_PROCEDURE', 'ANATOMY', 'TIME_EXPRESSION', 'BEHAVIORAL_ENVIRONMENTAL_SOCIAL', ], ], 'Float' => [ 'type' => 'float', ], 'ICD10CMAttribute' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'ICD10CMAttributeType', ], 'Score' => [ 'shape' => 'Float', ], 'RelationshipScore' => [ 'shape' => 'Float', ], 'Id' => [ 'shape' => 'Integer', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Text' => [ 'shape' => 'String', ], 'Traits' => [ 'shape' => 'ICD10CMTraitList', ], 'Category' => [ 'shape' => 'ICD10CMEntityType', ], 'RelationshipType' => [ 'shape' => 'ICD10CMRelationshipType', ], ], ], 'ICD10CMAttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ICD10CMAttribute', ], ], 'ICD10CMAttributeType' => [ 'type' => 'string', 'enum' => [ 'ACUITY', 'DIRECTION', 'SYSTEM_ORGAN_SITE', 'QUALITY', 'QUANTITY', 'TIME_TO_DX_NAME', 'TIME_EXPRESSION', ], ], 'ICD10CMConcept' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => 'String', ], 'Code' => [ 'shape' => 'String', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'ICD10CMConceptList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ICD10CMConcept', ], ], 'ICD10CMEntity' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'Integer', ], 'Text' => [ 'shape' => 'OntologyLinkingBoundedLengthString', ], 'Category' => [ 'shape' => 'ICD10CMEntityCategory', ], 'Type' => [ 'shape' => 'ICD10CMEntityType', ], 'Score' => [ 'shape' => 'Float', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Attributes' => [ 'shape' => 'ICD10CMAttributeList', ], 'Traits' => [ 'shape' => 'ICD10CMTraitList', ], 'ICD10CMConcepts' => [ 'shape' => 'ICD10CMConceptList', ], ], ], 'ICD10CMEntityCategory' => [ 'type' => 'string', 'enum' => [ 'MEDICAL_CONDITION', ], ], 'ICD10CMEntityList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ICD10CMEntity', ], ], 'ICD10CMEntityType' => [ 'type' => 'string', 'enum' => [ 'DX_NAME', 'TIME_EXPRESSION', ], ], 'ICD10CMRelationshipType' => [ 'type' => 'string', 'enum' => [ 'OVERLAP', 'SYSTEM_ORGAN_SITE', ], ], 'ICD10CMTrait' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'ICD10CMTraitName', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'ICD10CMTraitList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ICD10CMTrait', ], ], 'ICD10CMTraitName' => [ 'type' => 'string', 'enum' => [ 'NEGATION', 'DIAGNOSIS', 'SIGN', 'SYMPTOM', 'PERTAINS_TO_FAMILY', 'HYPOTHETICAL', 'LOW_CONFIDENCE', ], ], 'IamRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:iam::[0-9]{12}:role/.+', ], 'InferICD10CMRequest' => [ 'type' => 'structure', 'required' => [ 'Text', ], 'members' => [ 'Text' => [ 'shape' => 'OntologyLinkingBoundedLengthString', ], ], ], 'InferICD10CMResponse' => [ 'type' => 'structure', 'required' => [ 'Entities', ], 'members' => [ 'Entities' => [ 'shape' => 'ICD10CMEntityList', ], 'PaginationToken' => [ 'shape' => 'String', ], 'ModelVersion' => [ 'shape' => 'String', ], ], ], 'InferRxNormRequest' => [ 'type' => 'structure', 'required' => [ 'Text', ], 'members' => [ 'Text' => [ 'shape' => 'OntologyLinkingBoundedLengthString', ], ], ], 'InferRxNormResponse' => [ 'type' => 'structure', 'required' => [ 'Entities', ], 'members' => [ 'Entities' => [ 'shape' => 'RxNormEntityList', ], 'PaginationToken' => [ 'shape' => 'String', ], 'ModelVersion' => [ 'shape' => 'String', ], ], ], 'InferSNOMEDCTRequest' => [ 'type' => 'structure', 'required' => [ 'Text', ], 'members' => [ 'Text' => [ 'shape' => 'OntologyLinkingBoundedLengthString', ], ], ], 'InferSNOMEDCTResponse' => [ 'type' => 'structure', 'required' => [ 'Entities', ], 'members' => [ 'Entities' => [ 'shape' => 'SNOMEDCTEntityList', ], 'PaginationToken' => [ 'shape' => 'String', ], 'ModelVersion' => [ 'shape' => 'String', ], 'SNOMEDCTDetails' => [ 'shape' => 'SNOMEDCTDetails', ], 'Characters' => [ 'shape' => 'Characters', ], ], ], 'InputDataConfig' => [ 'type' => 'structure', 'required' => [ 'S3Bucket', ], 'members' => [ 'S3Bucket' => [ 'shape' => 'S3Bucket', ], 'S3Key' => [ 'shape' => 'S3Key', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, 'fault' => true, ], 'InvalidEncodingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'JobId' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'JobName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'JobStatus' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'IN_PROGRESS', 'COMPLETED', 'PARTIAL_SUCCESS', 'FAILED', 'STOP_REQUESTED', 'STOPPED', ], ], 'KMSKey' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '.*', ], 'LanguageCode' => [ 'type' => 'string', 'enum' => [ 'en', ], ], 'ListEntitiesDetectionV2JobsRequest' => [ 'type' => 'structure', 'members' => [ 'Filter' => [ 'shape' => 'ComprehendMedicalAsyncJobFilter', ], 'NextToken' => [ 'shape' => 'String', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], ], ], 'ListEntitiesDetectionV2JobsResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobPropertiesList' => [ 'shape' => 'ComprehendMedicalAsyncJobPropertiesList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListICD10CMInferenceJobsRequest' => [ 'type' => 'structure', 'members' => [ 'Filter' => [ 'shape' => 'ComprehendMedicalAsyncJobFilter', ], 'NextToken' => [ 'shape' => 'String', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], ], ], 'ListICD10CMInferenceJobsResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobPropertiesList' => [ 'shape' => 'ComprehendMedicalAsyncJobPropertiesList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListPHIDetectionJobsRequest' => [ 'type' => 'structure', 'members' => [ 'Filter' => [ 'shape' => 'ComprehendMedicalAsyncJobFilter', ], 'NextToken' => [ 'shape' => 'String', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], ], ], 'ListPHIDetectionJobsResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobPropertiesList' => [ 'shape' => 'ComprehendMedicalAsyncJobPropertiesList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListRxNormInferenceJobsRequest' => [ 'type' => 'structure', 'members' => [ 'Filter' => [ 'shape' => 'ComprehendMedicalAsyncJobFilter', ], 'NextToken' => [ 'shape' => 'String', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], ], ], 'ListRxNormInferenceJobsResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobPropertiesList' => [ 'shape' => 'ComprehendMedicalAsyncJobPropertiesList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListSNOMEDCTInferenceJobsRequest' => [ 'type' => 'structure', 'members' => [ 'Filter' => [ 'shape' => 'ComprehendMedicalAsyncJobFilter', ], 'NextToken' => [ 'shape' => 'String', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], ], ], 'ListSNOMEDCTInferenceJobsResponse' => [ 'type' => 'structure', 'members' => [ 'ComprehendMedicalAsyncJobPropertiesList' => [ 'shape' => 'ComprehendMedicalAsyncJobPropertiesList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ManifestFilePath' => [ 'type' => 'string', 'max' => 4096, 'min' => 1, ], 'MaxResultsInteger' => [ 'type' => 'integer', 'max' => 500, 'min' => 1, ], 'ModelVersion' => [ 'type' => 'string', ], 'OntologyLinkingBoundedLengthString' => [ 'type' => 'string', 'max' => 10000, 'min' => 1, ], 'OutputDataConfig' => [ 'type' => 'structure', 'required' => [ 'S3Bucket', ], 'members' => [ 'S3Bucket' => [ 'shape' => 'S3Bucket', ], 'S3Key' => [ 'shape' => 'S3Key', ], ], ], 'RelationshipType' => [ 'type' => 'string', 'enum' => [ 'EVERY', 'WITH_DOSAGE', 'ADMINISTERED_VIA', 'FOR', 'NEGATIVE', 'OVERLAP', 'DOSAGE', 'ROUTE_OR_MODE', 'FORM', 'FREQUENCY', 'DURATION', 'STRENGTH', 'RATE', 'ACUITY', 'TEST_VALUE', 'TEST_UNITS', 'TEST_UNIT', 'DIRECTION', 'SYSTEM_ORGAN_SITE', 'AMOUNT', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'RxNormAttribute' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'RxNormAttributeType', ], 'Score' => [ 'shape' => 'Float', ], 'RelationshipScore' => [ 'shape' => 'Float', ], 'Id' => [ 'shape' => 'Integer', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Text' => [ 'shape' => 'String', ], 'Traits' => [ 'shape' => 'RxNormTraitList', ], ], ], 'RxNormAttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RxNormAttribute', ], ], 'RxNormAttributeType' => [ 'type' => 'string', 'enum' => [ 'DOSAGE', 'DURATION', 'FORM', 'FREQUENCY', 'RATE', 'ROUTE_OR_MODE', 'STRENGTH', ], ], 'RxNormConcept' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => 'String', ], 'Code' => [ 'shape' => 'String', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'RxNormConceptList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RxNormConcept', ], ], 'RxNormEntity' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'Integer', ], 'Text' => [ 'shape' => 'OntologyLinkingBoundedLengthString', ], 'Category' => [ 'shape' => 'RxNormEntityCategory', ], 'Type' => [ 'shape' => 'RxNormEntityType', ], 'Score' => [ 'shape' => 'Float', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Attributes' => [ 'shape' => 'RxNormAttributeList', ], 'Traits' => [ 'shape' => 'RxNormTraitList', ], 'RxNormConcepts' => [ 'shape' => 'RxNormConceptList', ], ], ], 'RxNormEntityCategory' => [ 'type' => 'string', 'enum' => [ 'MEDICATION', ], ], 'RxNormEntityList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RxNormEntity', ], ], 'RxNormEntityType' => [ 'type' => 'string', 'enum' => [ 'BRAND_NAME', 'GENERIC_NAME', ], ], 'RxNormTrait' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'RxNormTraitName', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'RxNormTraitList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RxNormTrait', ], ], 'RxNormTraitName' => [ 'type' => 'string', 'enum' => [ 'NEGATION', ], ], 'S3Bucket' => [ 'type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '^[0-9a-z\\.\\-_]*(?!\\.)$', ], 'S3Key' => [ 'type' => 'string', 'max' => 1024, 'pattern' => '.*', ], 'SNOMEDCTAttribute' => [ 'type' => 'structure', 'members' => [ 'Category' => [ 'shape' => 'SNOMEDCTEntityCategory', ], 'Type' => [ 'shape' => 'SNOMEDCTAttributeType', ], 'Score' => [ 'shape' => 'Float', ], 'RelationshipScore' => [ 'shape' => 'Float', ], 'RelationshipType' => [ 'shape' => 'SNOMEDCTRelationshipType', ], 'Id' => [ 'shape' => 'Integer', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Text' => [ 'shape' => 'String', ], 'Traits' => [ 'shape' => 'SNOMEDCTTraitList', ], 'SNOMEDCTConcepts' => [ 'shape' => 'SNOMEDCTConceptList', ], ], ], 'SNOMEDCTAttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SNOMEDCTAttribute', ], ], 'SNOMEDCTAttributeType' => [ 'type' => 'string', 'enum' => [ 'ACUITY', 'QUALITY', 'DIRECTION', 'SYSTEM_ORGAN_SITE', 'TEST_VALUE', 'TEST_UNIT', ], ], 'SNOMEDCTConcept' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => 'String', ], 'Code' => [ 'shape' => 'String', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'SNOMEDCTConceptList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SNOMEDCTConcept', ], ], 'SNOMEDCTDetails' => [ 'type' => 'structure', 'members' => [ 'Edition' => [ 'shape' => 'String', ], 'Language' => [ 'shape' => 'String', ], 'VersionDate' => [ 'shape' => 'String', ], ], ], 'SNOMEDCTEntity' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'Integer', ], 'Text' => [ 'shape' => 'OntologyLinkingBoundedLengthString', ], 'Category' => [ 'shape' => 'SNOMEDCTEntityCategory', ], 'Type' => [ 'shape' => 'SNOMEDCTEntityType', ], 'Score' => [ 'shape' => 'Float', ], 'BeginOffset' => [ 'shape' => 'Integer', ], 'EndOffset' => [ 'shape' => 'Integer', ], 'Attributes' => [ 'shape' => 'SNOMEDCTAttributeList', ], 'Traits' => [ 'shape' => 'SNOMEDCTTraitList', ], 'SNOMEDCTConcepts' => [ 'shape' => 'SNOMEDCTConceptList', ], ], ], 'SNOMEDCTEntityCategory' => [ 'type' => 'string', 'enum' => [ 'MEDICAL_CONDITION', 'ANATOMY', 'TEST_TREATMENT_PROCEDURE', ], ], 'SNOMEDCTEntityList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SNOMEDCTEntity', ], ], 'SNOMEDCTEntityType' => [ 'type' => 'string', 'enum' => [ 'DX_NAME', 'TEST_NAME', 'PROCEDURE_NAME', 'TREATMENT_NAME', ], ], 'SNOMEDCTRelationshipType' => [ 'type' => 'string', 'enum' => [ 'ACUITY', 'QUALITY', 'TEST_VALUE', 'TEST_UNITS', 'DIRECTION', 'SYSTEM_ORGAN_SITE', ], ], 'SNOMEDCTTrait' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'SNOMEDCTTraitName', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'SNOMEDCTTraitList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SNOMEDCTTrait', ], ], 'SNOMEDCTTraitName' => [ 'type' => 'string', 'enum' => [ 'NEGATION', 'DIAGNOSIS', 'SIGN', 'SYMPTOM', 'PERTAINS_TO_FAMILY', 'HYPOTHETICAL', 'LOW_CONFIDENCE', 'PAST_HISTORY', 'FUTURE', ], ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'StartEntitiesDetectionV2JobRequest' => [ 'type' => 'structure', 'required' => [ 'InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode', ], 'members' => [ 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'JobName' => [ 'shape' => 'JobName', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenString', 'idempotencyToken' => true, ], 'KMSKey' => [ 'shape' => 'KMSKey', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'StartEntitiesDetectionV2JobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StartICD10CMInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode', ], 'members' => [ 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'JobName' => [ 'shape' => 'JobName', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenString', 'idempotencyToken' => true, ], 'KMSKey' => [ 'shape' => 'KMSKey', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'StartICD10CMInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StartPHIDetectionJobRequest' => [ 'type' => 'structure', 'required' => [ 'InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode', ], 'members' => [ 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'JobName' => [ 'shape' => 'JobName', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenString', 'idempotencyToken' => true, ], 'KMSKey' => [ 'shape' => 'KMSKey', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'StartPHIDetectionJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StartRxNormInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode', ], 'members' => [ 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'JobName' => [ 'shape' => 'JobName', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenString', 'idempotencyToken' => true, ], 'KMSKey' => [ 'shape' => 'KMSKey', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'StartRxNormInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StartSNOMEDCTInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode', ], 'members' => [ 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'JobName' => [ 'shape' => 'JobName', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenString', 'idempotencyToken' => true, ], 'KMSKey' => [ 'shape' => 'KMSKey', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'StartSNOMEDCTInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopEntitiesDetectionV2JobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopEntitiesDetectionV2JobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopICD10CMInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopICD10CMInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopPHIDetectionJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopPHIDetectionJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopRxNormInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopRxNormInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopSNOMEDCTInferenceJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'StopSNOMEDCTInferenceJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'String' => [ 'type' => 'string', 'min' => 1, ], 'TextSizeLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'Trait' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'AttributeName', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'TraitList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Trait', ], ], 'UnmappedAttribute' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'EntityType', ], 'Attribute' => [ 'shape' => 'Attribute', ], ], ], 'UnmappedAttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UnmappedAttribute', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], ],];
