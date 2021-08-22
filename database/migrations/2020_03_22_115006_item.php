<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Item extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('items')) {
            Schema::create('items', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->unique();
                $table->integer('price');
                $table->text('description')->nullable();
                $table->unsignedBigInteger('menus_id')->index();
                $table->string('delivery_time');
                $table->foreign('menus_id')->references('id')->on('menus')->onDelete('cascade');
                $table->string('image');
                $table->integer('veg')->default(1);
                $table->integer('sort')->default(1);
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
