<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('price');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('menus_id')->index();
            $table->string('delivery_time');
            $table->foreign('menus_id')->references('id')->on('menus')->onDelete('cascade');
            $table->string('image');
            $table->integer('veg')->default(1);
            $table->integer('sort')->default(1);
            $table->integer('todays_special')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('items');
    }
}
