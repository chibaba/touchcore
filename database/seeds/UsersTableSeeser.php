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
        App\User::create([
        'name' => 'chinedu onyeoka',

        'email' => 'chinedu.onyeoka@gmail.com',

        'password' => bcrypt('umeadify')
        ]);
    }
}
