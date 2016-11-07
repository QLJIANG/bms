<?php

use Illuminate\Database\Seeder;

class BmsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\BmsData::class, 100)->create();
    }
}
