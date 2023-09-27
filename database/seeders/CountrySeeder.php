<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Countries;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Countries::truncate();

        $path = storage_path() . "/json/countries.json";

        $countries = json_decode(file_get_contents($path));

        foreach ($countries as $key => $value) {
            Countries::create([
                "co_id" => $value->id,
                "name" => $value->name,
                "iso3" => $value->iso3,
                "iso2" => $value->iso2,
                "numeric_code" => $value->numeric_code,
                "phone_code" => $value->phone_code,
                "capital" => $value->capital,
                "currency" => $value->currency,
                "currency_name" => $value->currency_name,
                "currency_symbol" => $value->currency_symbol,
                "tld" => $value->tld,
                "native" => $value->native,
                "region" => $value->region,
                "subregion" => $value->subregion,
                "timezones" => json_encode($value->timezones),
                "translations" => json_encode($value->translations),
                "latitude" => $value->latitude,
                "longitude" => $value->longitude,
                "emoji" => $value->emoji,
                "emojiU" => $value->emojiU,
            ]);
        }
    }
}
