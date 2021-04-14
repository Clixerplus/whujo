<?php
return [
    'enabled' => [
        'mercadopago',
    ],
    'use_sandbox' => env('SANDBOX_GATEWAYS', true),
    'mercadopago' => [
        'logo' => '/img/payment/mercadopago.png',
        'display' => 'MercadoPago',
        'client' => env('MERCADOPAGO_ACCESS_TOKEN'),
        'secret' => env('MERCADOPAGP_PUBLIC_KEY'),
    ],
];
