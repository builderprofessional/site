<?php
$config = [];

$config['page_name'] = basename($_SERVER['PHP_SELF']);
$config['twitter'] = 'https://twitter.com/wehelpbuilders';
$config['facebook'] = 'https://www.facebook.com/wehelpbuilders';
$config['linkedin'] = 'https://www.linkedin.com/company/builder-professional';

$config['contactMethods'] = [
    [
        'cssClass' => 'address',
        'label' => 'Address: ',
        'value' => 'PO Box 121068 Arlington, TX 76012',
    ],
    [
        'cssClass' => 'phone',
        'label' => 'Phone: ',
        'value' => '(916) WE-BUILD / (916) 932-8453',
    ],
    [
        'cssClass' => 'email',
        'label' => 'Support: ',
        'value' => 'support@builderprofessional.com',
    ],
    [
        'cssClass' => 'email',
        'label' => 'Sales: ',
        'value' => 'sales@builderprofessional.com',
    ],
];

global $config;