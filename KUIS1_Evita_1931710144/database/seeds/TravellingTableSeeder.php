<?php

use Illuminate\Database\Seeder;

class TravellingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Travelling::class, 8)->create();
    }
}
