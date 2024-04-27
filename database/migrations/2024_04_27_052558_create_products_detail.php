<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products_detail', function (Blueprint $table) {
            $table->id();
            $table->string('item_detail');
            $table->timestamps();
        });


        \DB::table('products_detail')->insert([
            [
                'id' => '1',
                'item_detail' => '価格安めの、手ごろな本棚です、あと残りわずかです。'
            ],
            [
                'id' => '2',
                'item_detail' => '昔のオーソドックスな、カメラで、一眼レフ、高機能デジタル版です。'
            ],
            [
                'id' => '3',
                'item_detail' => '映画で使われた、椅子です、座りやすいので、お部屋に一脚どうぞ'
            ],
            [
                'id' => '4',
                'item_detail' => 'お子様ように、作成された椅子と勉強机です、お子様にどうぞ'
            ],
            [
                'id' => '5',
                'item_detail' => '夜のひとときを、飾るダウンライトです、'
            ],
            [
                'id' => '6',
                'item_detail' => '大規模なプラネタリウムです、お子様とどうぞ'
            ],
        ]);





    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_detail');
    }
};
