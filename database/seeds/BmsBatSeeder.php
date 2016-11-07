<?php

use Illuminate\Database\Seeder;

class BmsBatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\BmsBat::class, 100)->create();
    }
}
