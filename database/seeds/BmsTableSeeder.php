<?php

use Illuminate\Database\Seeder;

class BmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bms')->delete();
        
        \DB::table('bms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mac' => 'AA-BB-CC-DD-EE-9J',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'mac' => 'AA-BB-CC-DD-EE-2O',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'mac' => 'AA-BB-CC-DD-EE-1B',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'mac' => 'AA-BB-CC-DD-EE-5W',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'mac' => 'AA-BB-CC-DD-EE-3T',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'mac' => 'AA-BB-CC-DD-EE-2L',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'mac' => 'AA-BB-CC-DD-EE-5P',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'mac' => 'AA-BB-CC-DD-EE-6R',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'mac' => 'AA-BB-CC-DD-EE-7P',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'mac' => 'AA-BB-CC-DD-EE-1P',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
