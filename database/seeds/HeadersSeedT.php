<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HeadersSeedT extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('test_header_3')->truncate();//test_header_3_id, test_header_1_id, test_header_2_id, test_header_3, created_at, updated_at
      DB::table('test_header_3')->insert([[
          'test_header_1_id' => '4',
          'test_header_2_id'=> '1',
          'test_header_3'=> 'Sharir Rachana',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '1',
            'test_header_3'=> 'Sharir Kriya',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '1',
            'test_header_3'=> 'Sanskrit',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '1',
            'test_header_3'=> 'Padartha Vigyan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '1',
            'test_header_3'=> 'Ayurved Itihas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
            'test_header_1_id' => '4',
            'test_header_2_id'=> '1',
            'test_header_3'=> 'Vagbhat Su.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '2',
            'test_header_3'=> 'Rasshastra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '2',
            'test_header_3'=> 'Agadtantra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '2',
            'test_header_3'=> 'Dravyagun',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '2',
            'test_header_3'=> 'Rognidan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '2',
            'test_header_3'=> 'Charak Purwardha',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '3',//, , ,
            'test_header_3'=> 'Swasthavrutta',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '3',
            'test_header_3'=> 'Streerog',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '3',
            'test_header_3'=> 'Balrog',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '3',
            'test_header_3'=> 'Charak Uttarardha',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '4',
            'test_header_3'=> 'Shalya',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '4',
            'test_header_3'=> 'shalakya',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '4',
            'test_header_3'=> 'Panchkarma',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '4',
            'test_header_3'=> 'Kaychikitsa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
            'test_header_2_id'=> '4',
            'test_header_3'=> 'Research & Statistics',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'Sutrasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'Nidansthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'Vimansthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'Sharirsthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'Indriyasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'Chikitsasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'kalpasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '5',
            'test_header_3'=> 'Siddhisthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '6',
            'test_header_3'=> 'Sutrasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '6',
            'test_header_3'=> 'Nidansthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '6',
            'test_header_3'=> 'Sharirsthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '6',
            'test_header_3'=> 'Chikitsasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '6',
            'test_header_3'=> 'kalpasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '6',
            'test_header_3'=> 'Uttartantra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '7',
            'test_header_3'=> 'Sutrasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '7',
            'test_header_3'=> 'Nidansthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '7',
            'test_header_3'=> 'Sharirsthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '7',
            'test_header_3'=> 'Chikitsasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '7',
            'test_header_3'=> 'kalpasthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '7',
            'test_header_3'=> 'Uttartarsthan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '8',
            'test_header_3'=> 'Sharangdhar',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '8',
            'test_header_3'=> 'Bhavprakash',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '5',
            'test_header_2_id'=> '8',
            'test_header_3'=> 'Hareet',//
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
            'test_header_1_id' => '5',
            'test_header_2_id'=> '8',
            'test_header_3'=> 'Kashyap',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '9',
            'test_header_3'=> 'Anatomy',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '9',
            'test_header_3'=> 'Physiology',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '10',
            'test_header_3'=> 'Pharmacology',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '11',
            'test_header_3'=> 'Gynecology',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '11',
            'test_header_3'=> 'Obstetric',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '11',
            'test_header_3'=> 'Pediatrics',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '12',
            'test_header_3'=> 'Surgery',//, , ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '12',
            'test_header_3'=> 'ENT',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '6',
            'test_header_2_id'=> '12',
            'test_header_3'=> 'Ophthalmology',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
           'test_header_1_id' => '6',
            'test_header_2_id'=> '12',
            'test_header_3'=> 'Medicine',//Kashyap
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]]);
    }
}
