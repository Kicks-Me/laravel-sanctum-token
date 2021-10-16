<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Delete old data -> to avoid dupplicate id because we are using faker to generate data.
        DB::table('users')->delete();

        //Generate new data
        $data = [
            'fullname'=>'sai yang',
            'username' => 'sai',
            'email' => 'saiyang@gmail.com',
            'password' => bcrypt('123456'),
            'tel' => '+856 300333334',
            'avatar' => 'https://via.placeholder.com/300x400/0000FF/808080 ?Text=MySoft',
            'role' => 1,
            'remember_token' => '1234567890'
        ];

        User::create($data);
        
        //Call UserFactory
        User::factory(100)->create();
    }
}
