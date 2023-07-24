<?php
// This file was auto-generated from sdk-root/src/data/networkmanager/2019-07-05/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region aws-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'networkmanager', 'signingRegion' => 'us-west-2', ], ], ], 'url' => 'https://networkmanager.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'aws-global', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'networkmanager', 'signingRegion' => 'us-west-2', ], ], ], 'url' => 'https://networkmanager.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region aws-us-gov-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'networkmanager', 'signingRegion' => 'us-gov-west-1', ], ], ], 'url' => 'https://networkmanager.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'aws-us-gov-global', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'networkmanager', 'signingRegion' => 'us-gov-west-1', ], ], ], 'url' => 'https://networkmanager.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://networkmanager.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For custom endpoint with region set and fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with region not set and fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
