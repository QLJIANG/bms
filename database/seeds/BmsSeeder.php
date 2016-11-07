<?php

use Illuminate\Database\Seeder;

class BmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Bms::class, 10)->create();
    }
}
