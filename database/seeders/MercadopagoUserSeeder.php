<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Seeder;

class MercadopagoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Seller

        /*
        Vendedor
            "id_mercadopago":743765778,
            "nickname_mercadopago":"TETE6815991",
            "password_mercadopago":"qatest3886",
            "site_status_mercadopago":"active",
            "email":"test_user_58893812@testuser.com"
        */
        User::factory()
        ->has(
            Service::factory(rand(1,3))
            ->hasMicroservices(4))
        ->create([
            'email' =>'test_user_58893812@testuser.com',
        ]);
        1236313120


        /*
        Comprador
            "id_mercadopago":743762114,
            "nickname_mercadopago":"TEST9R5V4FNK",
            "password_mercadopago":"qatest9001",
            "site_status_mercadopago":"active",
            "email":"test_user_58321508@testuser.com"
        */
            User::factory()->create([
                'email' => 'test_user_58321508@testuser.com'
            ]);

        /*
        Marketplace
            "id":744459939,
            "nickname":"TESTYVFYWIUI",
            "password":"qatest7390",
            "site_status":"active",
            "email":"test_user_21672683@testuser.com",

            * CREDENCIALES MARKETPLACE
            APP_ID = ID: 6889998068947570
            PUBLIC_KEY   = TEST-11209421-0e59-404f-869f-4fddea1e3fea
                           APP_USR-f587eb88-31e6-49f9-bb2e-97c9671566b1
            ACCESS_TOKEN = TEST-6889998068947570-041601-3ea0d8106e16c0556e29d80593e6787c-744459939
                           APP_USR-6889998068947570-041601-642b80fffb3e4e6abe119c3121398359-744459939


            * CREDENCIALES VENDEDOR
            PUBLIC_KEY   = TEST-66c0d497-4a2b-4576-8eca-1bb5cffdb020
                           APP_USR-f84f2a7d-0061-4855-af9e-c9ec774856ed
            ACCESS_TOKEN = TEST-7492515157636570-041602-969e193c7934fdcc9c5bb2b8a0f66bf6-743765778
                           APP_USR-7492515157636570-041602-9f2802459bff7741b5c1d81f448b1702-743765778

            "access_token":"TEST-6889998068947570-042822-1a778215c35571c2e644239081ccb00a-743765778",
            "token_type":"bearer",
            "expires_in":15552000,
            "scope":"offline_access read write",
            "user_id":743765778,
            "refresh_token":"TG-6089e7966519b40007e8eca5-743765778",
            "public_key":"TEST-3570ccd1-2d4c-4a44-9c29-93899493d982",
            "live_mode":false


            -- https://auth.mercadopago.com.ar/authorization?client_id=6889998068947570&response_type=code&platform_id=mp&redirect_uri=https://localhost/authorization

            Pago: 1236312971


            {
                "acquirer_reconciliation":[],
                "additional_info":{
                    "available_balance":null,
                    "ip_address":"186.185.252.18",
                    "items":[
                        {
                            "category_id":null,
                            "description":null,
                            "id":null,
                            "picture_url":null,
                            "quantity":"1",
                            "title":"Et quia libero cum cupiditate.",
                            "unit_price":"100.0"
                        }
                    ],
                    "nsu_processadora":null
                },
                "authorization_code":null,
                "binary_mode":true,
                "brand_id":null,
                "call_for_authorize_id":null,
                "captured":true,
                "card":{
                    "cardholder":{
                        "identification":{
                            "number":"12345678",
                            "type":"DNI"
                        },
                        "name":"APRO"
                    },
                    "date_created":"2021-04-17T10:45:40.000-04:00",
                    "date_last_updated":"2021-04-17T11:07:05.000-04:00",
                    "expiration_month":11,
                    "expiration_year":2025,
                    "first_six_digits":"503175",
                    "id":"8996060154",
                    "last_four_digits":"0604"
                },
                "charges_details":[],
                "corporation_id":null,
                "counter_currency":null,
                "coupon_amount":0,
                "currency_id":"ARS",
                "date_approved":"2021-04-28T18:56:48.319-04:00",
                "date_created":"2021-04-28T18:56:48.121-04:00",
                "date_last_updated":"2021-04-28T18:56:48.319-04:00",
                "date_of_expiration":null,
                "deduction_schema":null,
                "description":"Et quia libero cum cupiditate.",
                "differential_pricing_id":null,
                "external_reference":null,
                "fee_details":[{
                    "amount":4.22,
                    "fee_payer":"collector",
                    "type":"mercadopago_fee"
                },
                {
                    "amount":5,
                    "fee_payer":"collector",
                    "type":"application_fee"
                }
            ],
            "id":1236312971,
            "installments":1,
            "integrator_id":null,
            "issuer_id":"3",
            "live_mode":false,
            "marketplace_owner":744459939,
            "merchant_account_id":null,
            "merchant_number":null,
            "metadata":{},
            "money_release_date":"2021-05-12T18:56:48.319-04:00",
            "money_release_schema":null,
            "notification_url":null,
            "operation_type":"regular_payment",
            "order":{
                "id":"2606747722",
                "type":"mercadopago"
            },
            "payment_method_id":"master",
            "payment_type_id":"credit_card",
            "platform_id":null,
            "point_of_interaction":{},
            "pos_id":null,
            "processing_mode":"aggregator",
            "refunds":[],
            "shipping_amount":0,
            "sponsor_id":null,
            "statement_descriptor":"WHUJO",
            "status":"approved",
            "status_detail":"accredited",
            "store_id":null,
            "taxes_amount":0,
            "transaction_amount":100,
            "transaction_amount_refunded":0,
            "transaction_details":
            {
                "acquirer_reference":null,
                "external_resource_url":null,
                "financial_institution":null,
                "installment_amount":100,
                "net_received_amount":90.78,
                "overpaid_amount":0,
                "payable_deferral_period":null,
                "payment_method_reference_id":null,
                "total_paid_amount":100
            }
        }

         */
    }
}

