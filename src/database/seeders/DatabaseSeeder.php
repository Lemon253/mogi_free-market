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
        $this->call([
            UsersTableSeeder::class,
            AddressesTableSeeder::class,
            BrandsTableSeeder::class,
            CategoriesTableSeeder::class,
            ItemsTableSeeder::class,
            CategoryItemTableSeeder::class,
            CommentsTableSeeder::class,
            FavoritesTableSeeder::class,
            LikesTableSeeder::class,
        ]);

    }
}
