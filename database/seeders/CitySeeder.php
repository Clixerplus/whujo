<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get("https://apis.datos.gob.ar/georef/api/departamentos?campos=id,nombre,provincia.id&max=1000&orden=id");


        City::factory()->create([
            'id'       => '000',
            'name'     => 'Ciudad Autónoma de Buenos Aires',
            'state_id' => '02',
        ]);

        foreach ($response->Json()['departamentos'] as $departamento) {
            City::factory()->create([
                'id'       => $departamento['id'],
                'name'     => $departamento['nombre'],
                'state_id' => $departamento['provincia']['id'],
            ]);
        }

    }
}
