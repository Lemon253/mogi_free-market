<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AddressesTableSeeder extends Seeder
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
            'user_id' => 1,
            'post_code' => '1050011',
            'prefecture' => '東京都',
            'city' => '港区',
            'street' => '芝公園4丁目2-8',
            'name' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        //パラメータの挿入
        DB::table('addresses')->insert($param);
    }
}
