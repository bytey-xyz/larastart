<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => 'Mihaly Santa','username' => 'meesee','password' => bcrypt('1234Qwer')]);
    }
}
