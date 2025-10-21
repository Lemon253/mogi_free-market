<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            // usersテーブルのidを参照し、外部キー制約を設定
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('post_code', 10);   // 郵便番号
            $table->string('prefecture', 10);  // 都道府県
            $table->string('city', 50);        // 市区町村
            $table->string('street', 100);     // 番地・町域
            $table->string('name', 100);       // 受取人名/住所名
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
