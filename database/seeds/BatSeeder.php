<?php

use Illuminate\Database\Seeder;

class BatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Bat::class, 100)->create();
    }
}
