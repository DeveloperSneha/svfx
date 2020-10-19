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
    'instagram_api' => [
    'token' => 'IGQVJYd0t4Y0NiVFd6dEZAqNF9FVmdFS2xQZADhNdk1sVGlPVkFLRDI3dlJNNzJCdkxvOUczcDhOaEx1SVRiWk1uLVJ2Y2VvSV9nUmFxWWtpR1pqcWNrWHByX0dxUHMxQmhLVU56c1hlS3ZAvMmRfUVJ2UAZDZD', // paste your access token inside quotes
    ],
    

];
