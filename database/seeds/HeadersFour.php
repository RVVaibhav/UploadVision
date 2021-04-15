<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HeadersFour extends Seeder
{
    /**
     * SELECT
     *
     * @return void
     */
    public function run()
    {
      DB::table('test_header_4')->truncate();//test_header_3_id, test_header_1_id, test_header_2_id, test_header_3, created_at, updated_at
      DB::table('test_header_4')->insert([[
          'test_header_1_id' => '4',
          'test_header_2_id'=> '1',
          'test_header_3_id'=> '1',
          'test_header_4'=> 'Sharir Rachna',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
          'test_header_1_id' => '4',
          'test_header_2_id'=> '1',
          'test_header_3_id'=> '1',
          'test_header_4'=> 'Sharir Kriya',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
            'test_header_1_id' => '4',
            'test_header_2_id'=> '1',
            'test_header_3_id'=> '1',
            'test_header_4'=> 'Ashtang Hriday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '1',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Padarth Vigyan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '1',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Ayurved Itihas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
            'test_header_1_id' => '4',
            'test_header_2_id'=> '1',
            'test_header_3_id'=> '1',
            'test_header_4'=> 'Sanskrit',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '2',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Charak Purvardh',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '2',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Rognidan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '2',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Rasshastra and Bhaishjyakalpana',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '2',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Dravyaguna',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '3',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Chark Uttarardh',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '3',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Strirog and Prasutitantra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '3',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Balrog',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '3',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Agadtantra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '3',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Swasthvritta',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '4',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Kayachikitsa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '4',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Shalyatantra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '4',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Shalakyatantra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '4',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Panchakarma',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ],[
        'test_header_1_id' => '4',
        'test_header_2_id'=> '4',
        'test_header_3_id'=> '1',
        'test_header_4'=> 'Research and Statistics',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]]);
    }
}
