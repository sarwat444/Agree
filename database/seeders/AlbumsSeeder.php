<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums_suppliers')->insert([
            [
                "album_name" => 'Cars',
                "images" => '["uploads/Products/car1.webp","uploads/Products/car2.webp","uploads/Products/car3.webp"]',
                "supplier_id" => 1,
            ],
            [
                "album_name" => 'Laptops',
                "images" => '["uploads/Products/laptop1.webp","uploads/Products/laptop2.webp","uploads/Products/laptop3.webp","uploads/Products/laptop4.webp","uploads/Products/laptop5.webp"]',
                "supplier_id" => 1,
            ],
            [
                "album_name" => 'Screens',
                "images" => '["uploads/Products/screen1.webp","uploads/Products/screen2.webp","uploads/Products/screen3.webp"]',
                "supplier_id" => 1,
            ],
            [
                "album_name" => 'Tires',
                "images" => '["uploads/Products/tire.webp"]',
                "supplier_id" => 1,
            ],
        ]);
    }
}
