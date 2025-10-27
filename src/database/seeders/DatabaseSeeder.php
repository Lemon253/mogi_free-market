<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //作成したシーダファイルの登録
        // データの実行順序を外部キーの依存関係に基づいて並べ替える
        $this->call([
            // --- 1. 親テーブル (依存されていないテーブル) ---
            UsersTableSeeder::class,
            AddressesTableSeeder::class,
            BrandsTableSeeder::class,
            CategoriesTableSeeder::class,

            // --- 2. アイテム (多くのテーブルの親となる) ---
            ItemsTableSeeder::class,      // items は users, brands, categories の後に実行

            // --- 3. 中間テーブルと子テーブル (items に依存する) ---
            CategoryItemTableSeeder::class, // items, categories の後に実行 **(順序変更)**
            CommentsTableSeeder::class,     // items, users の後に実行
            FavoritesTableSeeder::class,    // items, users の後に実行
            LikesTableSeeder::class,        // items, users の後に実行
        ]);
    }
}
