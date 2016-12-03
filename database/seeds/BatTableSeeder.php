<?php

use Illuminate\Database\Seeder;

class BatTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bat')->delete();
        
        \DB::table('bat')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bms_id' => 1,
                'factory' => 'Lemke, Kemmer and White',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'bms_id' => 2,
                'factory' => 'Ernser LLC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'bms_id' => 7,
                'factory' => 'Cronin, Kulas and Trantow',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'bms_id' => 1,
                'factory' => 'Nikolaus, Koelpin and Ernser',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'bms_id' => 1,
                'factory' => 'Kertzmann-Zemlak',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'bms_id' => 1,
                'factory' => 'Graham Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'bms_id' => 3,
                'factory' => 'Hamill-Schmeler',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'bms_id' => 1,
                'factory' => 'Pfannerstill, Lakin and Stoltenberg',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'bms_id' => 9,
                'factory' => 'Balistreri, Haag and Hettinger',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'bms_id' => 4,
                'factory' => 'Robel Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'bms_id' => 3,
                'factory' => 'Mosciski, Yundt and Gerhold',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'bms_id' => 6,
                'factory' => 'Pollich, Hudson and Kautzer',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'bms_id' => 4,
                'factory' => 'Lebsack, Hilll and Rowe',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'bms_id' => 9,
                'factory' => 'Powlowski, Rice and Gorczany',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'bms_id' => 10,
                'factory' => 'Hansen, Langosh and Schmeler',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'bms_id' => 10,
                'factory' => 'Conn-Rohan',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'bms_id' => 5,
                'factory' => 'McDermott-Reinger',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'bms_id' => 7,
                'factory' => 'Bode-Labadie',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'bms_id' => 3,
                'factory' => 'Abshire-Roberts',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'bms_id' => 2,
                'factory' => 'Terry Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'bms_id' => 7,
                'factory' => 'Jacobi-Hills',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'bms_id' => 9,
                'factory' => 'Shanahan-Nolan',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'bms_id' => 8,
                'factory' => 'Stark Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'bms_id' => 7,
                'factory' => 'Barton-Larkin',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'bms_id' => 7,
                'factory' => 'Windler-Turcotte',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'bms_id' => 10,
                'factory' => 'Jacobson-Hand',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'bms_id' => 3,
                'factory' => 'Bins Ltd',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'bms_id' => 8,
                'factory' => 'Rogahn, Grant and Mann',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'bms_id' => 8,
                'factory' => 'Kuhlman LLC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'bms_id' => 4,
                'factory' => 'Homenick-Altenwerth',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'bms_id' => 10,
                'factory' => 'Kihn-Kemmer',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'bms_id' => 6,
                'factory' => 'Hegmann LLC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'bms_id' => 2,
                'factory' => 'Witting Group',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'bms_id' => 4,
                'factory' => 'Boehm-Cartwright',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'bms_id' => 9,
                'factory' => 'Runolfsson-Daniel',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'bms_id' => 7,
                'factory' => 'Gibson Ltd',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'bms_id' => 5,
                'factory' => 'Lehner and Sons',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'bms_id' => 7,
                'factory' => 'Wintheiser, Goyette and Witting',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'bms_id' => 8,
                'factory' => 'Hoppe Group',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'bms_id' => 8,
                'factory' => 'Gerhold-Bashirian',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'bms_id' => 6,
                'factory' => 'Lang, Towne and Hyatt',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'bms_id' => 5,
                'factory' => 'Nader-Vandervort',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'bms_id' => 6,
                'factory' => 'Nader, Flatley and Tremblay',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'bms_id' => 1,
                'factory' => 'Volkman, Altenwerth and Sawayn',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'bms_id' => 4,
                'factory' => 'Carter Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'bms_id' => 5,
                'factory' => 'Botsford-Schaden',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'bms_id' => 2,
                'factory' => 'Wolf, Marquardt and Lindgren',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'bms_id' => 3,
                'factory' => 'Pollich Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'bms_id' => 3,
                'factory' => 'Grant Ltd',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'bms_id' => 7,
                'factory' => 'Zemlak, Labadie and Daniel',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'bms_id' => 7,
                'factory' => 'Schuster, Corkery and Bashirian',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'bms_id' => 2,
                'factory' => 'Connelly LLC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'bms_id' => 7,
                'factory' => 'Stoltenberg-Zulauf',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'bms_id' => 8,
                'factory' => 'Walsh, Johns and Cronin',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'bms_id' => 8,
                'factory' => 'Terry Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'bms_id' => 6,
                'factory' => 'McDermott-Murray',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'bms_id' => 6,
                'factory' => 'Rempel, Mayer and Jaskolski',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'bms_id' => 7,
                'factory' => 'Schulist and Sons',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'bms_id' => 8,
                'factory' => 'Borer Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'bms_id' => 10,
                'factory' => 'Toy Inc',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'bms_id' => 3,
                'factory' => 'Kihn, Mann and Bashirian',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'bms_id' => 9,
                'factory' => 'Smitham-Stracke',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'bms_id' => 1,
                'factory' => 'Connelly-Metz',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'bms_id' => 8,
                'factory' => 'Mayert, Block and Maggio',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'bms_id' => 1,
                'factory' => 'Erdman, Ferry and Mraz',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'bms_id' => 3,
                'factory' => 'Moen, Osinski and Conn',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'bms_id' => 4,
                'factory' => 'Durgan and Sons',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'bms_id' => 8,
                'factory' => 'Torp-Boyle',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'bms_id' => 1,
                'factory' => 'Padberg-Kshlerin',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'bms_id' => 10,
                'factory' => 'Hyatt-Stiedemann',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'bms_id' => 10,
                'factory' => 'Sanford-Lebsack',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'bms_id' => 2,
                'factory' => 'Kuhic, Prosacco and Doyle',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'bms_id' => 6,
                'factory' => 'Kuvalis and Sons',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'bms_id' => 6,
                'factory' => 'Littel, Stokes and Little',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'bms_id' => 6,
                'factory' => 'Jacobi, Ratke and Carroll',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'bms_id' => 9,
                'factory' => 'Aufderhar, Heller and Mann',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'bms_id' => 8,
                'factory' => 'McLaughlin, Krajcik and Prosacco',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'bms_id' => 3,
                'factory' => 'Miller-Ernser',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'bms_id' => 2,
                'factory' => 'Wolff-Hudson',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'bms_id' => 7,
                'factory' => 'Eichmann-Kuphal',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'bms_id' => 5,
                'factory' => 'Lebsack, Kirlin and Prohaska',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'bms_id' => 4,
                'factory' => 'Schinner LLC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'bms_id' => 6,
                'factory' => 'Aufderhar-Goodwin',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'bms_id' => 3,
                'factory' => 'Dickinson, Krajcik and Dickinson',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'bms_id' => 3,
                'factory' => 'Schmidt and Sons',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'bms_id' => 7,
                'factory' => 'Muller-Streich',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'bms_id' => 6,
                'factory' => 'Hane-Koepp',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'bms_id' => 2,
                'factory' => 'Smitham-O\'Conner',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'bms_id' => 6,
                'factory' => 'Kub LLC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'bms_id' => 10,
                'factory' => 'McGlynn, West and Kassulke',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'bms_id' => 2,
                'factory' => 'Gibson, Fay and Johns',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'bms_id' => 5,
                'factory' => 'Lueilwitz, Gleason and Smith',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'bms_id' => 9,
                'factory' => 'Franecki, Ratke and O\'Hara',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'bms_id' => 10,
                'factory' => 'Lebsack Group',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'bms_id' => 7,
                'factory' => 'Jacobson PLC',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'bms_id' => 6,
                'factory' => 'Volkman-Walter',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'bms_id' => 9,
                'factory' => 'Walker, Donnelly and O\'Conner',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'bms_id' => 10,
                'factory' => 'McClure-Swift',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'bms_id' => 6,
                'factory' => 'Reilly, Kozey and Hilpert',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'bms_id' => 1,
                'factory' => 'Turner, Hermiston and Hansen',
                'created_at' => '2016-11-12 11:01:09',
                'updated_at' => '2016-11-12 11:01:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
