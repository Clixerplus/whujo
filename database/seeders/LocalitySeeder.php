<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get("https://apis.datos.gob.ar/georef/api/localidades?campos=id,nombre,departamento.id&max=5000&orden=id");


        foreach ($response->Json()['localidades'] as $localidad) {
            Locality::factory()->create([
                'id'       => $localidad['id'],
                'name'     => $localidad['nombre'],
                'city_id'  => $localidad['departamento']['id'] ?? '000',
            ]);
        }
    }
}
