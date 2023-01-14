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
            "name" => "Samsung S7",
            "price" => 3000000,
            "description" => 'test gadget',
            "year" => "2014",
            "quantity"=> 10,
            "image" => 'phone.png'
        ]);
    }
}
