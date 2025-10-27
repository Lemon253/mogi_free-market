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
            'brand_name' => 'Apple',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        //パラメータの挿入
        DB::table('brands')->insert($param);
    }
}
