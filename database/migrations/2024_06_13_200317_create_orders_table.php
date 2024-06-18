<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
                $table->id('order_id');
                $table->unsignedBigInteger('customer_id');
                $table->unsignedBigInteger('product_id');
                $table->date('order_date');
                $table->date('order_estimation_date');
                $table->integer('total_price');
                $table->unsignedBigInteger('payment_id');
                $table->integer('quantity');
                $table->string('order_status', 255);
                $table->string('design_image', 255)->nullable();
                $table->timestamps();

                $table->foreign('customer_id')
                    ->references('customer_id')
                    ->on('customers')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('product_id')
                    ->references('product_id')
                    ->on('products')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('payment_id')->references('payment_id')->on('payment_methods');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
