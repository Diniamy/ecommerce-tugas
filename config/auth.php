<?php

return [

    'defaults' => [
        'guard' => 'web',  // Default guard tetap 'web'
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [  // Guard baru untuk admin
            'driver' => 'session',  // Menggunakan session
            'provider' => 'admins',  // Provider khusus untuk admin
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,  // Model user biasa
        ],

        'admins' => [  // Provider baru untuk admin
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,  // Model Admin
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins' => [  // Konfigurasi reset password untuk admin
            'provider' => 'admins',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
