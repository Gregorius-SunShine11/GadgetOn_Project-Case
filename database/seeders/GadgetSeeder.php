<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GadgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gadgets')->insert([
            'name' => "Samsung Galaxy S21",
            'description' => "Hp merek Samsung keluaran tahun 2021 dengan harga Rp.8000000",
            'price' => 8000000,
            'year' => '2021',
            'image' => 'Samsung Galaxy S21.jpg'
        ]);

        DB::table('gadgets')->insert([
            'name' => "Samsung Galaxy S22",
            'description' => "Hp merek Samsung keluaran tahun 2022 dengan harga Rp.10000000",
            'price' => 10000000,
            'year' => '2022',
            'image' => 'Samsung Galaxy S22.jpg'
        ]);

        DB::table('gadgets')->insert([
            'name' => "Huawei P50",
            'description' => "Hp merek Huawei keluaran tahun 2022 dengan harga Rp.9000000",
            'price' => 9000000,
            'year' => '2022',
            'image' => 'Huawei P50.png'
        ]);

        DB::table('gadgets')->insert([
            'name' => "Huawei P40",
            'description' => "Hp merek Huawei keluaran tahun 2021 dengan harga Rp.8000000",
            'price' => 8000000,
            'year' => '2021',
            'image' => 'Huawei P40.jpg'
        ]);

        DB::table('gadgets')->insert([
            'name' => "Iphone 14",
            'description' => "Hp merek Apple keluaran tahun 2022 dengan harga Rp.20000000",
            'price' => 20000000,
            'year' => '2022',
            'image' => 'Iphone 14.jpg'
        ]);

        DB::table('gadgets')->insert([
            'name' => "Iphone X",
            'description' => "Hp merek Apple keluaran tahun 2018 dengan harga Rp.7000000",
            'price' => 7000000,
            'year' => '2018',
            'image' => 'Iphone X.png'
        ]);

        DB::table('gadgets')->insert([
            'name' => "Oppo Reno 8",
            'description' => "Hp merek Oppo keluaran tahun 2022 dengan harga Rp.6000000",
            'price' => 6000000,
            'year' => '2022',
            'image' => 'Oppo reno 8.jpg'
        ]);
    }
}
