<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');

            $table->uuid('uuid');

            $table->string('receipt_url');
            $table->integer('total');
            $table->string('paddle_checkout_id');
            $table->string('paddle_order_id');
            $table->string('paddle_product_id');

            $table->json('paddle_response');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');

            $table->timestamps();
        });
    }
}
