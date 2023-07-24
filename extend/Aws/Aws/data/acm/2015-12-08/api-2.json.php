<?php
// This file was auto-generated from sdk-root/src/data/acm/2015-12-08/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-12-08', 'endpointPrefix' => 'acm', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'ACM', 'serviceFullName' => 'AWS Certificate Manager', 'serviceId' => 'ACM', 'signatureVersion' => 'v4', 'targetPrefix' => 'CertificateManager', 'uid' => 'acm-2015-12-08', ], 'operations' => [ 'AddTagsToCertificate' => [ 'name' => 'AddTagsToCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AddTagsToCertificateRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidTagException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'TagPolicyException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DeleteCertificate' => [ 'name' => 'DeleteCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteCertificateRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'DescribeCertificate' => [ 'name' => 'DescribeCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeCertificateRequest', ], 'output' => [ 'shape' => 'DescribeCertificateResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'ExportCertificate' => [ 'name' => 'ExportCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ExportCertificateRequest', ], 'output' => [ 'shape' => 'ExportCertificateResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestInProgressException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'GetAccountConfiguration' => [ 'name' => 'GetAccountConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'output' => [ 'shape' => 'GetAccountConfigurationResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetCertificate' => [ 'name' => 'GetCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetCertificateRequest', ], 'output' => [ 'shape' => 'GetCertificateResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestInProgressException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'ImportCertificate' => [ 'name' => 'ImportCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ImportCertificateRequest', ], 'output' => [ 'shape' => 'ImportCertificateResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidTagException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'TagPolicyException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'ListCertificates' => [ 'name' => 'ListCertificates', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListCertificatesRequest', ], 'output' => [ 'shape' => 'ListCertificatesResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgsException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTagsForCertificate' => [ 'name' => 'ListTagsForCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForCertificateRequest', ], 'output' => [ 'shape' => 'ListTagsForCertificateResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'PutAccountConfiguration' => [ 'name' => 'PutAccountConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutAccountConfigurationRequest', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], ], ], 'RemoveTagsFromCertificate' => [ 'name' => 'RemoveTagsFromCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RemoveTagsFromCertificateRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidTagException', ], [ 'shape' => 'TagPolicyException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'RenewCertificate' => [ 'name' => 'RenewCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RenewCertificateRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArnException', ], ], ], 'RequestCertificate' => [ 'name' => 'RequestCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RequestCertificateRequest', ], 'output' => [ 'shape' => 'RequestCertificateResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidDomainValidationOptionsException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidTagException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'TagPolicyException', ], [ 'shape' => 'InvalidParameterException', ], ], ], 'ResendValidationEmail' => [ 'name' => 'ResendValidationEmail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ResendValidationEmailRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidArnException', ], [ 'shape' => 'InvalidDomainValidationOptionsException', ], ], ], 'UpdateCertificateOptions' => [ 'name' => 'UpdateCertificateOptions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateCertificateOptionsRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'InvalidArnException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ServiceErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'AddTagsToCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', 'Tags', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'Arn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:[\\w+=/,.@-]+:acm:[\\w+=/,.@-]*:[0-9]+:[\\w+=,.@-]+(/[\\w+=,.@-]+)*', ], 'AvailabilityErrorMessage' => [ 'type' => 'string', ], 'CertificateBody' => [ 'type' => 'string', 'max' => 32768, 'min' => 1, 'pattern' => '-{5}BEGIN CERTIFICATE-{5}\\u000D?\\u000A([A-Za-z0-9/+]{64}\\u000D?\\u000A)*[A-Za-z0-9/+]{1,64}={0,2}\\u000D?\\u000A-{5}END CERTIFICATE-{5}(\\u000D?\\u000A)?', ], 'CertificateBodyBlob' => [ 'type' => 'blob', 'max' => 32768, 'min' => 1, ], 'CertificateChain' => [ 'type' => 'string', 'max' => 2097152, 'min' => 1, 'pattern' => '(-{5}BEGIN CERTIFICATE-{5}\\u000D?\\u000A([A-Za-z0-9/+]{64}\\u000D?\\u000A)*[A-Za-z0-9/+]{1,64}={0,2}\\u000D?\\u000A-{5}END CERTIFICATE-{5}\\u000D?\\u000A)*-{5}BEGIN CERTIFICATE-{5}\\u000D?\\u000A([A-Za-z0-9/+]{64}\\u000D?\\u000A)*[A-Za-z0-9/+]{1,64}={0,2}\\u000D?\\u000A-{5}END CERTIFICATE-{5}(\\u000D?\\u000A)?', ], 'CertificateChainBlob' => [ 'type' => 'blob', 'max' => 2097152, 'min' => 1, ], 'CertificateDetail' => [ 'type' => 'structure', 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'DomainName' => [ 'shape' => 'DomainNameString', ], 'SubjectAlternativeNames' => [ 'shape' => 'DomainList', ], 'DomainValidationOptions' => [ 'shape' => 'DomainValidationList', ], 'Serial' => [ 'shape' => 'String', ], 'Subject' => [ 'shape' => 'String', ], 'Issuer' => [ 'shape' => 'String', ], 'CreatedAt' => [ 'shape' => 'TStamp', ], 'IssuedAt' => [ 'shape' => 'TStamp', ], 'ImportedAt' => [ 'shape' => 'TStamp', ], 'Status' => [ 'shape' => 'CertificateStatus', ], 'RevokedAt' => [ 'shape' => 'TStamp', ], 'RevocationReason' => [ 'shape' => 'RevocationReason', ], 'NotBefore' => [ 'shape' => 'TStamp', ], 'NotAfter' => [ 'shape' => 'TStamp', ], 'KeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], 'SignatureAlgorithm' => [ 'shape' => 'String', ], 'InUseBy' => [ 'shape' => 'InUseList', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'Type' => [ 'shape' => 'CertificateType', ], 'RenewalSummary' => [ 'shape' => 'RenewalSummary', ], 'KeyUsages' => [ 'shape' => 'KeyUsageList', ], 'ExtendedKeyUsages' => [ 'shape' => 'ExtendedKeyUsageList', ], 'CertificateAuthorityArn' => [ 'shape' => 'Arn', ], 'RenewalEligibility' => [ 'shape' => 'RenewalEligibility', ], 'Options' => [ 'shape' => 'CertificateOptions', ], ], ], 'CertificateOptions' => [ 'type' => 'structure', 'members' => [ 'CertificateTransparencyLoggingPreference' => [ 'shape' => 'CertificateTransparencyLoggingPreference', ], ], ], 'CertificateStatus' => [ 'type' => 'string', 'enum' => [ 'PENDING_VALIDATION', 'ISSUED', 'INACTIVE', 'EXPIRED', 'VALIDATION_TIMED_OUT', 'REVOKED', 'FAILED', ], ], 'CertificateStatuses' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateStatus', ], ], 'CertificateSummary' => [ 'type' => 'structure', 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'DomainName' => [ 'shape' => 'DomainNameString', ], 'SubjectAlternativeNameSummaries' => [ 'shape' => 'DomainList', ], 'HasAdditionalSubjectAlternativeNames' => [ 'shape' => 'NullableBoolean', 'box' => true, ], 'Status' => [ 'shape' => 'CertificateStatus', ], 'Type' => [ 'shape' => 'CertificateType', ], 'KeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], 'KeyUsages' => [ 'shape' => 'KeyUsageNames', ], 'ExtendedKeyUsages' => [ 'shape' => 'ExtendedKeyUsageNames', ], 'InUse' => [ 'shape' => 'NullableBoolean', 'box' => true, ], 'Exported' => [ 'shape' => 'NullableBoolean', 'box' => true, ], 'RenewalEligibility' => [ 'shape' => 'RenewalEligibility', ], 'NotBefore' => [ 'shape' => 'TStamp', ], 'NotAfter' => [ 'shape' => 'TStamp', ], 'CreatedAt' => [ 'shape' => 'TStamp', ], 'IssuedAt' => [ 'shape' => 'TStamp', ], 'ImportedAt' => [ 'shape' => 'TStamp', ], 'RevokedAt' => [ 'shape' => 'TStamp', ], ], ], 'CertificateSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateSummary', ], ], 'CertificateTransparencyLoggingPreference' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'CertificateType' => [ 'type' => 'string', 'enum' => [ 'IMPORTED', 'AMAZON_ISSUED', 'PRIVATE', ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'DeleteCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'Certificate' => [ 'shape' => 'CertificateDetail', ], ], ], 'DomainList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainNameString', ], 'max' => 100, 'min' => 1, ], 'DomainNameString' => [ 'type' => 'string', 'max' => 253, 'min' => 1, 'pattern' => '^(\\*\\.)?(((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9])\\.)+((?!-)[A-Za-z0-9-]{1,62}[A-Za-z0-9])$', ], 'DomainStatus' => [ 'type' => 'string', 'enum' => [ 'PENDING_VALIDATION', 'SUCCESS', 'FAILED', ], ], 'DomainValidation' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainNameString', ], 'ValidationEmails' => [ 'shape' => 'ValidationEmailList', ], 'ValidationDomain' => [ 'shape' => 'DomainNameString', ], 'ValidationStatus' => [ 'shape' => 'DomainStatus', ], 'ResourceRecord' => [ 'shape' => 'ResourceRecord', ], 'ValidationMethod' => [ 'shape' => 'ValidationMethod', ], ], ], 'DomainValidationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainValidation', ], 'max' => 1000, 'min' => 1, ], 'DomainValidationOption' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'ValidationDomain', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainNameString', ], 'ValidationDomain' => [ 'shape' => 'DomainNameString', ], ], ], 'DomainValidationOptionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainValidationOption', ], 'max' => 100, 'min' => 1, ], 'ExpiryEventsConfiguration' => [ 'type' => 'structure', 'members' => [ 'DaysBeforeExpiry' => [ 'shape' => 'PositiveInteger', ], ], ], 'ExportCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', 'Passphrase', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'Passphrase' => [ 'shape' => 'PassphraseBlob', ], ], ], 'ExportCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'Certificate' => [ 'shape' => 'CertificateBody', ], 'CertificateChain' => [ 'shape' => 'CertificateChain', ], 'PrivateKey' => [ 'shape' => 'PrivateKey', ], ], ], 'ExtendedKeyUsage' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'ExtendedKeyUsageName', ], 'OID' => [ 'shape' => 'String', ], ], ], 'ExtendedKeyUsageFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtendedKeyUsageName', ], ], 'ExtendedKeyUsageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtendedKeyUsage', ], ], 'ExtendedKeyUsageName' => [ 'type' => 'string', 'enum' => [ 'TLS_WEB_SERVER_AUTHENTICATION', 'TLS_WEB_CLIENT_AUTHENTICATION', 'CODE_SIGNING', 'EMAIL_PROTECTION', 'TIME_STAMPING', 'OCSP_SIGNING', 'IPSEC_END_SYSTEM', 'IPSEC_TUNNEL', 'IPSEC_USER', 'ANY', 'NONE', 'CUSTOM', ], ], 'ExtendedKeyUsageNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtendedKeyUsageName', ], ], 'FailureReason' => [ 'type' => 'string', 'enum' => [ 'NO_AVAILABLE_CONTACTS', 'ADDITIONAL_VERIFICATION_REQUIRED', 'DOMAIN_NOT_ALLOWED', 'INVALID_PUBLIC_DOMAIN', 'DOMAIN_VALIDATION_DENIED', 'CAA_ERROR', 'PCA_LIMIT_EXCEEDED', 'PCA_INVALID_ARN', 'PCA_INVALID_STATE', 'PCA_REQUEST_FAILED', 'PCA_NAME_CONSTRAINTS_VALIDATION', 'PCA_RESOURCE_NOT_FOUND', 'PCA_INVALID_ARGS', 'PCA_INVALID_DURATION', 'PCA_ACCESS_DENIED', 'SLR_NOT_FOUND', 'OTHER', ], ], 'Filters' => [ 'type' => 'structure', 'members' => [ 'extendedKeyUsage' => [ 'shape' => 'ExtendedKeyUsageFilterList', ], 'keyUsage' => [ 'shape' => 'KeyUsageFilterList', ], 'keyTypes' => [ 'shape' => 'KeyAlgorithmList', ], ], ], 'GetAccountConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'ExpiryEvents' => [ 'shape' => 'ExpiryEventsConfiguration', ], ], ], 'GetCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'GetCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'Certificate' => [ 'shape' => 'CertificateBody', ], 'CertificateChain' => [ 'shape' => 'CertificateChain', ], ], ], 'IdempotencyToken' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '\\w+', ], 'ImportCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'Certificate', 'PrivateKey', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'Certificate' => [ 'shape' => 'CertificateBodyBlob', ], 'PrivateKey' => [ 'shape' => 'PrivateKeyBlob', ], 'CertificateChain' => [ 'shape' => 'CertificateChainBlob', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'ImportCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'InUseList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'InvalidArgsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidArnException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidDomainValidationOptionsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidStateException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidTagException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'KeyAlgorithm' => [ 'type' => 'string', 'enum' => [ 'RSA_1024', 'RSA_2048', 'RSA_3072', 'RSA_4096', 'EC_prime256v1', 'EC_secp384r1', 'EC_secp521r1', ], ], 'KeyAlgorithmList' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyAlgorithm', ], ], 'KeyUsage' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'KeyUsageName', ], ], ], 'KeyUsageFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyUsageName', ], ], 'KeyUsageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyUsage', ], ], 'KeyUsageName' => [ 'type' => 'string', 'enum' => [ 'DIGITAL_SIGNATURE', 'NON_REPUDIATION', 'KEY_ENCIPHERMENT', 'DATA_ENCIPHERMENT', 'KEY_AGREEMENT', 'CERTIFICATE_SIGNING', 'CRL_SIGNING', 'ENCIPHER_ONLY', 'DECIPHER_ONLY', 'ANY', 'CUSTOM', ], ], 'KeyUsageNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyUsageName', ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ListCertificatesRequest' => [ 'type' => 'structure', 'members' => [ 'CertificateStatuses' => [ 'shape' => 'CertificateStatuses', ], 'Includes' => [ 'shape' => 'Filters', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxItems' => [ 'shape' => 'MaxItems', ], 'SortBy' => [ 'shape' => 'SortBy', ], 'SortOrder' => [ 'shape' => 'SortOrder', ], ], ], 'ListCertificatesResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'CertificateSummaryList' => [ 'shape' => 'CertificateSummaryList', ], ], ], 'ListTagsForCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'ListTagsForCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ], ], 'MaxItems' => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 10000, 'min' => 1, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]*', ], 'NullableBoolean' => [ 'type' => 'boolean', ], 'PassphraseBlob' => [ 'type' => 'blob', 'max' => 128, 'min' => 4, 'sensitive' => true, ], 'PcaArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:[\\w+=/,.@-]+:acm-pca:[\\w+=/,.@-]*:[0-9]+:[\\w+=,.@-]+(/[\\w+=,.@-]+)*', ], 'PositiveInteger' => [ 'type' => 'integer', 'min' => 1, ], 'PrivateKey' => [ 'type' => 'string', 'max' => 524288, 'min' => 1, 'pattern' => '-{5}BEGIN PRIVATE KEY-{5}\\u000D?\\u000A([A-Za-z0-9/+]{64}\\u000D?\\u000A)*[A-Za-z0-9/+]{1,64}={0,2}\\u000D?\\u000A-{5}END PRIVATE KEY-{5}(\\u000D?\\u000A)?', 'sensitive' => true, ], 'PrivateKeyBlob' => [ 'type' => 'blob', 'max' => 5120, 'min' => 1, 'sensitive' => true, ], 'PutAccountConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'IdempotencyToken', ], 'members' => [ 'ExpiryEvents' => [ 'shape' => 'ExpiryEventsConfiguration', ], 'IdempotencyToken' => [ 'shape' => 'IdempotencyToken', ], ], ], 'RecordType' => [ 'type' => 'string', 'enum' => [ 'CNAME', ], ], 'RemoveTagsFromCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', 'Tags', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'RenewCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'RenewalEligibility' => [ 'type' => 'string', 'enum' => [ 'ELIGIBLE', 'INELIGIBLE', ], ], 'RenewalStatus' => [ 'type' => 'string', 'enum' => [ 'PENDING_AUTO_RENEWAL', 'PENDING_VALIDATION', 'SUCCESS', 'FAILED', ], ], 'RenewalSummary' => [ 'type' => 'structure', 'required' => [ 'RenewalStatus', 'DomainValidationOptions', 'UpdatedAt', ], 'members' => [ 'RenewalStatus' => [ 'shape' => 'RenewalStatus', ], 'DomainValidationOptions' => [ 'shape' => 'DomainValidationList', ], 'RenewalStatusReason' => [ 'shape' => 'FailureReason', ], 'UpdatedAt' => [ 'shape' => 'TStamp', ], ], ], 'RequestCertificateRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainNameString', ], 'ValidationMethod' => [ 'shape' => 'ValidationMethod', ], 'SubjectAlternativeNames' => [ 'shape' => 'DomainList', ], 'IdempotencyToken' => [ 'shape' => 'IdempotencyToken', ], 'DomainValidationOptions' => [ 'shape' => 'DomainValidationOptionList', ], 'Options' => [ 'shape' => 'CertificateOptions', ], 'CertificateAuthorityArn' => [ 'shape' => 'PcaArn', ], 'Tags' => [ 'shape' => 'TagList', ], 'KeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], ], ], 'RequestCertificateResponse' => [ 'type' => 'structure', 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], ], ], 'RequestInProgressException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResendValidationEmailRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', 'Domain', 'ValidationDomain', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'Domain' => [ 'shape' => 'DomainNameString', ], 'ValidationDomain' => [ 'shape' => 'DomainNameString', ], ], ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResourceRecord' => [ 'type' => 'structure', 'required' => [ 'Name', 'Type', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'RecordType', ], 'Value' => [ 'shape' => 'String', ], ], ], 'RevocationReason' => [ 'type' => 'string', 'enum' => [ 'UNSPECIFIED', 'KEY_COMPROMISE', 'CA_COMPROMISE', 'AFFILIATION_CHANGED', 'SUPERCEDED', 'CESSATION_OF_OPERATION', 'CERTIFICATE_HOLD', 'REMOVE_FROM_CRL', 'PRIVILEGE_WITHDRAWN', 'A_A_COMPROMISE', ], ], 'ServiceErrorMessage' => [ 'type' => 'string', ], 'SortBy' => [ 'type' => 'string', 'enum' => [ 'CREATED_AT', ], ], 'SortOrder' => [ 'type' => 'string', 'enum' => [ 'ASCENDING', 'DESCENDING', ], ], 'String' => [ 'type' => 'string', ], 'TStamp' => [ 'type' => 'timestamp', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[\\p{L}\\p{Z}\\p{N}_.:\\/=+\\-@]*', ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 1, ], 'TagPolicyException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '[\\p{L}\\p{Z}\\p{N}_.:\\/=+\\-@]*', ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'AvailabilityErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'TooManyTagsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'UpdateCertificateOptionsRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateArn', 'Options', ], 'members' => [ 'CertificateArn' => [ 'shape' => 'Arn', ], 'Options' => [ 'shape' => 'CertificateOptions', ], ], ], 'ValidationEmailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ValidationExceptionMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'ValidationExceptionMessage' => [ 'type' => 'string', ], 'ValidationMethod' => [ 'type' => 'string', 'enum' => [ 'EMAIL', 'DNS', ], ], ],];
