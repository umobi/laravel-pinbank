<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'sandbox' => env('PINBANK_SANDBOX', true),
    'username' => env('PINBANK_USERNAME', ''),
    'password' => env('PINBANK_PASSWORD', ''),
    'request_origin' => env('PINBANK_REQUEST_ORIGIN', ''),
    'channel_code' => env('PINBANK_CHANNEL_CODE', ''),
    'client_code' => env('PINBANK_CLIENT_CODE', ''),
    'key_store' => env('PINBANK_KEY_STORE', ''),

    'username_sandbox' => env('PINBANK_USERNAME_SANDBOX', ''),
    'password_sandbox' => env('PINBANK_PASSWORD_SANDBOX', ''),
    'request_origin_sandbox' => env('PINBANK_REQUEST_ORIGIN_SANDBOX', ''),
    'channel_code_sandbox' => env('PINBANK_CHANNEL_CODE_SANDBOX', ''),
    'client_code_sandbox' => env('PINBANK_CLIENT_CODE_SANDBOX', ''),
    'key_store_sandbox' => env('PINBANK_KEY_STORE_SANDBOX', ''),
];
