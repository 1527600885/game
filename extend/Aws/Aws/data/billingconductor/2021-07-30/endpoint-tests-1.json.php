<?php
// This file was auto-generated from sdk-root/src/data/billingconductor/2021-07-30/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region aws-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'billingconductor', 'signingRegion' => 'us-east-1', ], ], ], 'url' => 'https://billingconductor.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'aws-global', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'billingconductor', 'signingRegion' => 'us-east-1', ], ], ], 'url' => 'https://billingconductor.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor.us-gov-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://billingconductor.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with region set and fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with region not set and fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => true, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => true, 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
