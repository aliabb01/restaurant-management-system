<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '941399147259-uf4a34f7mer3ucqm6fk7qfd6ufr9d3ep.apps.googleusercontent.com',
        'client_secret' => 'kg9nDgcQPfx7fpIEpKGkVrHm',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'stripe' => [
        'secret' => 'sk_test_KgWGfjYK5D44EOt5kY98tpb400yZi3LTh2',
    ],
];
