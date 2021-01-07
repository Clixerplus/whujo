<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre&orden=id");

        foreach ($response->Json()['provincias'] as $provincia) {

            State::factory()->create([
                'id'   => $provincia['id'],
                'name' => $provincia['nombre'],
            ]);
        }
    }
}
