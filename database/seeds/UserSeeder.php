<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'vaibhav',
            'gender' => 'male',
            'mobile' => '9595095220',
            'role' => 'admin',
            'password' => bcrypt('admin321'),
        ]);
    }
}
