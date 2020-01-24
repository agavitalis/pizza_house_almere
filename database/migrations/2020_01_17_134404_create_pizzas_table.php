<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pizza_name');
            $table->text('pizza_description')->nullable();
            $table->string('flavour');
            $table->string('price');
            $table->string('old_price')->nullable();
            $table->boolean('in_stock')->default(1);
            $table->string('display_picture_path')->nullable();
            $table->string('display_picture_name')->nullable();
            $table->bigInteger('menu_id');
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
        Schema::dropIfExists('pizzas');
    }
}
