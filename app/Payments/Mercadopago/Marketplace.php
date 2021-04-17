<?php

namespace App\Payments\Mercadopago;

use Illuminate\Support\Facades\Http;

final class Marketpalce
{
    public function getAuthorizationToken()
    {
        $app_id = env('MERCADOPAGO_APP_ID');
        $url_back = 'Http://';
        $url = "http:// {$app_id}{$url_back}";
        return redirect($url);
    }

    public function linkUserAccount($authorization_code)
    {

        
        Http::get('https://api.mercadopago.com/oauth/token')
            ->header('accept:application/json')
            ->header('content-type:application/x-www-form-urlencoded')
            ->body([
                'client_secret' = $acces_token,
                'grant_type' => 'authorization_code',
                'code' => $authorization_code,
                'redirect_uri' = $url_redirect
            ]);
    }
}
