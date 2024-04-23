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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('image_name');
            $table->string('price');
            $table->timestamps();
        });

       
\DB::table('post')->insert([
    [
    'id' => '1',
    'item_name' => '本棚',
    'image_name' => 'Bookshelf.jpg',
    'price' => '1,2500',
    ],
    [
        'id' => '2',
        'item_name' => 'カメラ',
        'image_name' => 'Camera.jpg',
        'price' => '3,4500',
    ],
    [
        'id' => '3',
        'item_name' => '椅子',
        'image_name' => 'Chair.jpg',
        'price' => '9,800',
    ],
    [
        'id' => '4',
        'item_name' => '机',
        'image_name' => 'Desk.jpg',
        'price' => '13,400',
    ],
    [
        'id' => '5',
        'item_name' => '照明',
        'image_name' => 'Lamp.jpg',
        'price' => '8,800',
    ],
    [
        'id' => '6',
        'item_name' => 'プラネタリウム',
        'image_name' => 'Planetarium.jpg',
        'price' => '2,4000',
    ]
]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
