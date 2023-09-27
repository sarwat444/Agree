<?php

namespace Database\Seeders;

use App\Models\Cities;
use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::truncate();

        $path = storage_path() . "/json/cities.json";

        $countries = json_decode(file_get_contents($path));

        foreach ($countries as $key => $value) {
            Cities::create([
                "ci_id" => $value->id,
                "name" => $value->name,
                "state_id" => $value->state_id,
                "state_code" => $value->state_code,
                "state_name" => $value->state_name,
                "country_id" => $value->country_id,
                "country_code" => $value->country_code,
                "country_name" => $value->country_name,
                "latitude" => $value->latitude,
                "longitude" => $value->longitude,
                "wikiDataId" => $value->wikiDataId,
            ]);
        }
    }
}
