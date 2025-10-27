<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //追加するパラメータ
        $param = [
            'id' => 1,
            'name' => 'test',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => null,
            'profile_image' => null,
            'address' =>null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        //パラメータの挿入
        DB::table('users')->insert($param);
    }

}
