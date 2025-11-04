<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BrandsTableSeeder extends Seeder
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
            'brand_name' => 'Rolax',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        //パラメータの挿入
        DB::table('brands')->insert($param);

        $param = [
            'id' => 2,
            'brand_name' => '西芝',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        //パラメータの挿入
        DB::table('brands')->insert($param);

        $param = [
            'id' => 3,
            'brand_name' => 'Starbacks',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        //パラメータの挿入
        DB::table('brands')->insert($param);

        $param = [
            'id' => 4,
            'brand_name' => 'なし',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('brands')->insert($param);
    }
}
