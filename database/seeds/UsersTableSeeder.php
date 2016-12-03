<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'bins.trever',
                'password' => '$2y$10$Q6JArrpORkRPWIz7o3Yyu.h/f3piNPFtttDi/I7YqJaVkp8/JwlvG',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'fhickle',
                'password' => '$2y$10$DiwM8BmguwEU0Dg9DeYXKOLGe0T9FraMZuTHknSjQGTj/VmIncX4W',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'priscilla37',
                'password' => '$2y$10$4aH8Tw8krlQvkcz9K0xTAeVqUpbC/vvf/o.l39NBZwgysyFbsBt/C',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'hahn.taryn',
                'password' => '$2y$10$rzsl2hjV9bea80e7k4v6WeKQOOMPZwXq83fJbjZVy6oqwbrOjUCd6',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'username' => 'kendall56',
                'password' => '$2y$10$tNO/0tsXwPn2EPIewcIzeeFuDxfJsI1WsDkDYcg1D4zhgInR89wlC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'jql',
                'password' => '$2y$10$bmXvLonzbIOT93dB81EYieZGV5U.9ajvRIZwiz.LSM7WYNB72iCT2',
                'created_at' => '2016-11-19 14:19:09',
                'updated_at' => '2016-11-19 14:19:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
