<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(UserSeeder::class);
         $this->call(BmsSeeder::class);
         $this->call(BatSeeder::class);
         $this->call(BmsUserSeeder::class);
         $this->call(BmsDataSeeder::class);
         $this->call(BatDataSeeder::class);

        Model::reguard();
    }
}
