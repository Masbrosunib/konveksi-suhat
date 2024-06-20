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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name', 255);
            $table->text('product_description');
            $table->integer('product_price');
            $table->string('product_image', 255);
            $table->string('product_categories', 255);
            $table->integer('quantity')->default(12)->min(12);
            $table->unsignedBigInteger('ornament_id');
            $table->timestamps();

            $table->foreign('ornament_id')->references('ornament_id')->on('ornaments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
