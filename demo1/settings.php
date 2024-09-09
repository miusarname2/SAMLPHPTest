<?php

    $spBaseUrl = 'http://localhost/php-saml-master'; //or http://<your_domain>

    $settingsInfo = array (
        'sp' => array (
            'entityId' => $spBaseUrl.'/demo1/metadata.php',
            'assertionConsumerService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?acs',
            ),
            'singleLogoutService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?sls',
            ),
            'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
        ),
        'idp' => array (
            'entityId' => 'https://app.onelogin.com/saml/metadata/1aab56ea-b076-435b-bd23-4a8d3aa3854f',
            'singleSignOnService' => array (
                'url' => 'https://testhub.onelogin.com/trust/saml2/http-post/sso/1aab56ea-b076-435b-bd23-4a8d3aa3854f',
            ),
            'singleLogoutService' => array (
                'url' => 'https://testhub.onelogin.com/trust/saml2/http-redirect/slo/3487929',
            ),
            'x509cert' => 'MIID2DCCAsCgAwIBAgIUedJSJNalIGE3P3WX4lK8CVYDF9QwDQYJKoZIhvcNAQEF
BQAwRDEPMA0GA1UECgwGQXZhbmNlMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAY
BgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMB4XDTI0MDkwOTE5MjAzM1oXDTI5MDkw
OTE5MjAzM1owRDEPMA0GA1UECgwGQXZhbmNlMRUwEwYDVQQLDAxPbmVMb2dpbiBJ
ZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMIIBIjANBgkqhkiG9w0BAQEF
AAOCAQ8AMIIBCgKCAQEA0qPeNtoQFbDf5CGHFiX4RsIQ4TE+e/XWYjiDLlhi1DRE
Up1fGdVSG+UfIt1tVEUtOp9zDj4udMyQR0z3akcIA3QZLV4Pj4CSnZuNMJbnjMd+
anuYF5dx9ixrNYaxqfO7To5ZggV0sco56WbIjwkk5UptgNC5aOU+HlpTqpyyeRGD
RWgyOrhkTvGsHJn4hjYRnEqnjQdp/RPBcja76dvTdSJcQVGGX3IOrS+JkIZx4VG0
KLF/vZ07ABx3igUjUisuDFKvNiezF/vL50J2i63lHnnCHZqtVRENOmbCegScXyJg
eB/s9upApQNJrV5WiDU7APzecD5wFphAsFqnxG7izQIDAQABo4HBMIG+MAwGA1Ud
EwEB/wQCMAAwHQYDVR0OBBYEFPAsDlPfxDC1JXEUl8fODM/rhz45MH8GA1UdIwR4
MHaAFPAsDlPfxDC1JXEUl8fODM/rhz45oUikRjBEMQ8wDQYDVQQKDAZBdmFuY2Ux
FTATBgNVBAsMDE9uZUxvZ2luIElkUDEaMBgGA1UEAwwRT25lTG9naW4gQWNjb3Vu
dCCCFHnSUiTWpSBhNz91l+JSvAlWAxfUMA4GA1UdDwEB/wQEAwIHgDANBgkqhkiG
9w0BAQUFAAOCAQEAyub5ugIKcP48wb/42exeLOy0kLHZsUN/oeYXJxG7Mb/VRvih
6+rb7GestH/rkL9yQlnf0CIr5EGH1B4SaZqomJ09TNBYhCwTf6LTR+CuXV6u6YMJ
8tr08ekCGn/1UQv+EkDY2fnkFrtCza77cadudFpb8LtTtWC1dqdL42eUCDFWidxK
rr7aYyabkTIA3F4K/jq4aNjuJ/NWGrz9npu9GP2l4Iqva/p+4/NcMErMMHpu9tJl
BrfuNcib2g+2mWc7PI9yqn8Obie3mHXtndedzVCGyesBprSDNuk9wnBpOK8jvbvS
9IOZpit4ycnUvlVcwdy4BwxtTp3B/wY41rsuXw==
',
        ),
    );
