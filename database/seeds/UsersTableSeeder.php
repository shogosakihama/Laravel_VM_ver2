<?php
use Illuminate\Database\Seeder;
 
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2018-10-02 14:28:19',
                'updated_at' => '2018-10-02 14:28:19'
            ]
        ]);
    }
}