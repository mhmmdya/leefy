<?php

use Illuminate\Database\Seeder;

class ProfessionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Professional::class, 30)->create();
    }
}
