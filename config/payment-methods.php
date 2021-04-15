<?php
return [
    'enabled' => [
        'mercadopago',
    ],
    'use_sandbox' => env('SANDBOX_GATEWAYS', true),
    'mercadopago' => [
        'logo' => '/img/payment/mercadopago.png',
        'display' => 'MercadoPago',
        'client_id' => env('MERCADOPAGO_APP_ID'),
        'access_token' => env('MERCADOPAGO_ACCESS_TOKEN'),
        'public_key' => env('MERCADOPAGO_PUBLIC_KEY'),
    ],
];
