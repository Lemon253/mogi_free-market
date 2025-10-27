<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
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
            'category_name' => '本',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        //パラメータの挿入
        DB::table('categories')->insert($param);
    }
}
