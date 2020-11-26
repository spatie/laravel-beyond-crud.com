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

    'spatie_prices_api' => [
        'purchasable_id' => env('PURCHASABLE_ID')
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'satis' => [
        'license' => env('SATIS_LICENSE'),
    ],

    'ses' => [
        'key' => env('SES_AWS_ACCESS_KEY_ID'),
        'secret' => env('SES_AWS_SECRET_ACCESS_KEY'),
        'region' => env('SES_AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'vimeo' => [
        'client' => env('VIMEO_CLIENT'),
        'secret' => env('VIMEO_SECRET'),
        'access' => env('VIMEO_ACCESS'),
    ],

    'github' => [
        'username' => env('GITHUB_USERNAME'),
        'token' => env('GITHUB_TOKEN'),
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_SECRET'),
        'redirect' => env('GITHUB_REDIRECT_URI')
    ],
    'mailcoach' => [
        'subscription_uuid' => env('MAILCOACH_SUBSCRIPTION_UUID')
    ]

];
