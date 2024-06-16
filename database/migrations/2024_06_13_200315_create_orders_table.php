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
            $table->id();
            $table->string('OrderID', 10)->primary();
            $table->string('CustomerID', 10);
            $table->string('AdminID', 10);
            $table->string('ProductID', 10);
            $table->date('order_date');
            $table->date('order_estimation');
            $table->integer('total_price');
            $table->string('PaymentID', 10);
            $table->integer('quantity');
            $table->string('status', 255);
            $table->string('Design_Image', 255)->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
