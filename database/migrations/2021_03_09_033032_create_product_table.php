<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PName');
            $table->integer('Price');
            $table->longText('Discription');
            $table->string('Image');
            $table->string('Image1');
            $table->string('Image2');
            $table->string('Image3');
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
        Schema::dropIfExists('_product');
    }
}
