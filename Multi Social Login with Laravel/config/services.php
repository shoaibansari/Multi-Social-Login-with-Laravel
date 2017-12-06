<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '183384292215236',
        'client_secret' => '7a686ecbe9ecd98fe588ec46ea9ff54c',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'mFPxyCJhDjGRXzrPRBk4ivM42',
        'client_secret' => 'KcMajac94BWIExvkp9302UyE81MeNj1ymmd08f53Ht9jo3Kb6Q',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    'google' => [
    'client_id' => '916988313810-tmjtt27u6jd1f2ktku1ikkbf9npmbcvj.apps.googleusercontent.com',
        'client_secret' => 'nliHTu6qcst6zTHCCeo9qqcJ',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
