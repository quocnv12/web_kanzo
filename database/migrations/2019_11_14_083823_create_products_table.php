<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_name')->unique();
            $table->string('name');
            $table->string('slug');
            $table->integer('price');
            $table->integer('sale_price');
            $table->string('image');
            $table->text('information');
            $table->text('thongso');
            $table->text('huongdan');
            $table->bigInteger('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('state')->default(1);
            $table->integer('count_view');
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
        Schema::dropIfExists('product');
    }
}
