<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CallRate::class);
        $this->call(coin::class);
        $this->call(ConvertCoin::class);
        $this->call(SecretChat::class);
        $this->call(headers::class);
        $this->call(HeadersSeed::class);
        $this->call(HeadersSeedT::class);
        $this->call(TestHeaders::class);

    }
}
