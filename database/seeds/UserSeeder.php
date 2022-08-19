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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Shibly',
            'email' => 'quantiklab@gmail.com',
            'password' => bcrypt('123456789'),
            'user_type' => 'admin',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Dave',
            'email' => 'dave@yahoo.com',
            'password' => bcrypt('123456'),
            'user_type' => 'user',
            'active_status' => '0',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Andre',
            'email' => 'andre@yahoo.com',
            'password' => bcrypt('123456'),
            'user_type' => 'user',
            'active_status' => '1',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
