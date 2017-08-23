<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        
        DB::table('crs_admin_user')->insert([
            'username' => 'User111',
            'lastname' => 'User',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);
         DB::table('crs_admin_user')->insert([
            'username' => 'test11',
            'lastname' => 'tester1',
            'email' => 'test1@email.com',
            'password' => bcrypt('password1'),
        ]);
 
    }
}
