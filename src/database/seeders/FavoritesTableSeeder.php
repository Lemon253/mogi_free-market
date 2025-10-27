<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesTableSeeder extends Seeder
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
            'item_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        //パラメータの挿入
        DB::table('favorites')->insert($param);
    }
}
