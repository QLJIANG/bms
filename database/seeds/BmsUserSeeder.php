<?php

use Illuminate\Database\Seeder;

class BmsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\BmsUser::class, 20)->create();
    }
}
