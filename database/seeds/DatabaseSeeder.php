<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            OrderStatusesTableSeeder::class,
            PriorityStatusesTableSeeder::class,
            OrderTypesTableSeeder::class,
            OrdersTableSeeder::class,
            ProfessionalsTableSeeder::class,
        ]);
    }
}
