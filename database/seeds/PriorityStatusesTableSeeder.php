<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriorityStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priority_statuses')->insert([
            'name' => "urgent",
        ]);

        DB::table('priority_statuses')->insert([
            'name' => "dispensable",
        ]);
    }
}
