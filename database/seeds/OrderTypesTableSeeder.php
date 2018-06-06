<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_types')->insert([
            'name' => "Elektronica Installeren",
        ]);

        DB::table('order_types')->insert([
            'name' => "WC Ontstoppen",
        ]);
    }
}
