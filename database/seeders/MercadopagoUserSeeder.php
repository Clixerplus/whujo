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
            APP_ID = ID: 6889998068947570
            PUBLIC_KEY   = TEST-11209421-0e59-404f-869f-4fddea1e3fea
            ACCESS_TOKEN = TEST-6889998068947570-041601-3ea0d8106e16c0556e29d80593e6787c-744459939

         */
    }
}
