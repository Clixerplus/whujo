<?php

namespace App\PaymentMethods;


use MercadoPago\SDK;
use MercadoPago\Item;
use MercadoPago\Payer;
use MercadoPago\Payment;
use MercadoPago\Preference;
use Illuminate\Http\Request;
use MercadoPago\MerchantOrder;

class MercadoPago
{
    public function __construct()
    {
        SDK::setClientId(
            config("payment-methods.mercadopago.client")
        );

        SDK::setClientSecret(
            config("payment-methods.mercadopago.secret")
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
