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
        $this->call(StationSeeder::class);

        Model::reguard();
        $this->call('BmsTableSeeder');
        $this->call('BatDataTableSeeder');
        $this->call('BatTableSeeder');
        $this->call('BmsDataTableSeeder');
        $this->call('BmsUserTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('StationTableSeeder');
    }
}
