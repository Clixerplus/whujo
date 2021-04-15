<?php

namespace App\PaymentMethods\Mercadopago;

use App\PaymentMethods\Mercadopago\SDK;
use App\PaymentMethods\Mercadopago\Payer;
use App\PaymentMethods\Mercadopago\Preference;

class MercadoPago
{
    public function __construct()
    {
        SDK::setAccessToken(
            config("payment-methods.mercadopago.access_token")
        );

        SDK::setClientId(
            config("payment-methods.mercadopago.client_id")
        );

        SDK::setPublicKey(
            config("payment-methods.mercadopago.public_key")
        );
    }

    public function setupPaymentAndGetRedirectURL($order): string
    {
        # Create a preference object
        $preference = new Preference();

        # Create an item object
        $item = new Item();
        $item->id = $order->id;
        $item->title = $order->name;
        $item->quantity = 1;
        $item->currency_id = 'ARS';
        $item->unit_price = 10;
        $item->picture_url = $order->photos[1];

        # Create a payer object
        $payer = new Payer();
        $payer->email = 'test_user_58321508@testuser.com';

        # Setting preference properties
        $preference->items = [$item];
        $preference->payer = $payer;

        # Save External Reference
        $preference->external_reference = $order->id;
        $preference->back_urls = [
            "success" => route('checkout.thanks'),
            "pending" => route('checkout.pending'),
            "failure" => route('checkout.error'),
        ];
        $preference->auto_return = "all";
        //$preference->notification_url = route('ipn');

        # Save and POST preference
        $preference->save();


        if (config('payment-methods.use_sandbox')) {
            return $preference->sandbox_init_point;
        }

        return $preference->init_point;
    }
}
