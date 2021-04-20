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
            "id": 746931280,
            "nickname": "TETE963798",
            "password": "qatest408",
            "site_status": "active",
            "email": "test_user_75689841@testuser.com"
        */
        User::factory()
        ->has(
            Service::factory(rand(1,3))
            ->hasMicroservices(4))
        ->create([
            'email' =>'test_user_75689841@testuser.com',
        ]);



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
        Marcketplace
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

            Cuenta real

            Public Key = TEST-f8b4415e-3c39-4507-a03b-4931dbf106cf
            Access Token= TEST-6480234298692909-030914-55ab350ef43f8f8255b2c9a06c14060f-515445429
            App Id = 6480234298692909

            https://auth.mercadopago.com.ar/authorization?client_id=6480234298692909&response_type=code&platform_id=mp&redirect_uri=http://localhost/authorization
         */
    }
}

