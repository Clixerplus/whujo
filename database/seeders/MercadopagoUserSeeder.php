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

    }
}
