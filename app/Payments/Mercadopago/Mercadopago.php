<?php

namespace App\Payments\Mercadopago;

use App\Payments\Mercadopago\SDK;
use App\Payments\Mercadopago\Item;
use App\Payments\Mercadopago\Payer;
use App\Payments\Mercadopago\Preference;

class Mercadopago
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

    public function setupPaymentAndGetRedirectURL($order, $user): string
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
        $payer->email = $user->email;
        //TODO: Agregar campo phone a user
        //$payer->phone = $user->phone;
        //TODO: Implementar clase address
        //$payer->address = $user->address;


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
        //TODO: Estudiar e implementar ruta ipn
        //$preference->notification_url = route('ipn');

        # Save and POST preference
        $preference->save();


        if (config('payment-methods.use_sandbox')) {
            return $preference->sandbox_init_point;
        }

        return $preference->init_point;
    }

    public function linkSellerAccount()
    {

    }

   /*  public function getAuthorizationCode()
    {
        $client_id
        $url_back = 'http://localhost/autorization';
        return redirect("https://auth.mercadopago.com.ar/authorization?client_id={$client_id}&response_type=code&platform_id=mp&redirect_uri={$url_back}");
    } */


    /*

    VINCULACION DE CUENTAS

    * OBTENER AUTHORIZATION CODE:
        Se envia al usuario a una url especifica dandole una opcion
        de autorizar o no la vinculacion de la cuenta. En caso de
        aprobarla, esta redirige a la url dada, adjuntando la informacion
        necesaria para crear la respectiva credencial.

         Atributos:
            * Url = https://auth.mercadopago.com.ar/authorization?client_id=APP_ID&response_type=code&platform_id=mp&redirect_uri=http://www.URL_de_retorno.com
            * client_id debe ser el APP_ID
            * redirect_uri  debe ser la url a la que se enviaran los datos de retorno

    * CREAR CREDENCIALES
        Se usa AUTHORIZATION_CODE obtenido en el paso anterior para obtener las
        credenciales del usuario y asi poder operar en su nombre.

        curl -X POST \
         -H 'accept: application/json' \
         -H 'content-type: application/x-www-form-urlencoded' \
         'https://api.mercadopago.com/oauth/token' \
         -d 'client_secret=ACCESS_TOKEN' \
         -d 'grant_type=authorization_code' \
         -d 'code=AUTHORIZATION_CODE' \
         -d 'redirect_uri=REDIRECT_URI'

        * Los parámetros que debes incluir son:

        * client_secret: Tu ACCESS_TOKEN.
        * code: El AUTHORIZATION_CODE obtenido en el paso anterior.
        * redirect_uri: Debe ser la misma Redirect URI que configuraste en tu aplicación.

        !Ejemplo de respuesta
        {
            "access_token": "MARKETPLACE_SELLER_TOKEN",
            "token_type": "bearer",
            "expires_in": 15552000,
            "scope": "offline_access read write",
            "refresh_token": "TG-XXXXXXXX"
        }


    * RENOVAR CREDENCIALES
        Proceso que se debe hacer por lo menos cada 5 meses de forma regular,
        el maximo que dura una credencial es de 6 meses.

        curl -X POST \
         -H 'accept: application/json' \
         -H 'content-type: application/x-www-form-urlencoded' \
         'https://api.mercadopago.com/oauth/token' \
         -d 'client_secret= ACCESS_TOKEN' \
         -d 'grant_type=refresh_token' \
         -d 'refresh_token=USER_RT'

        !Ejemplo de respuesta
        {
            "access_token": "MARKETPLACE_SELLER_TOKEN",
            "token_type": "bearer",
            "expires_in": 15552000,
            "scope": "offline_access read write",
            "refresh_token": "TG-XXXXXXXX"
        }

    * GENERAR PAGO MARKETPLACE

        $preference = new MercadoPago\Preference();

        $item = new MercadoPago\Item();
        $item->title = "Blue shirt";
        $item->quantity = 10;
        $item->currency_id = "ARS";
        $item->unit_price = 150;

        $payer = new MercadoPago\Payer();
        $payer->email = "test_user_19653727@testuser.com";

        $preference->items = array($item);
        $preference->payer = $payer;
        $preference->marketplace_fee = 2.56
        $preference->notification_url = "http://urlmarketplace.com/notification_ipn"

        $preference->save();


        curl -X GET \
    'https://api.mercadopago.com/v1/payments/search?sort=date_created&criteria=desc&external_reference=ID_REF' \
    -H 'Authorization: Bearer ACCESS_TOKEN_ENV' 
    */
}
