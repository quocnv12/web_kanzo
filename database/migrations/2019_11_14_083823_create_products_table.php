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
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('code_name');
            $table->integer('price');
            $table->integer('sale_price');
            $table->string('image');
            $table->text('content');
            $table->unsignedBigInteger('id_category');
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('new')->default(1);//1 là sản phẩm mới
            $table->integer('count_view');

            $table->timestamps();
            $table->foreign('id_category')->references('id')->on('category');
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
