<?php

use Illuminate\Database\Seeder;

class BatDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\BatData::class, 1000)->create();
    }
}
