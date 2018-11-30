<?php
return [
    'mch_id' => env('SWIFPASS_MCH_ID', '7551000001'),
    'mch_key' => env('SWIFPASS_MCH_ID', '9d101c97133837e13dde2d32a5054abb'),
    'sign_type' => 'MD5',
    'rsa_public_key' => env('SWIFPASS_RSA_PLANTFORM_PUBLIC_KEY'),
    'rsa_private_key' => env('SWIFPASS_RSA_PRIVATE_KEY'),
    'sub_app_id' => env('SWIFPASS_SUB_APPID', ''),
    'notify_url' => env('SWIFPASS_NOTIFY_URL', ''),
];