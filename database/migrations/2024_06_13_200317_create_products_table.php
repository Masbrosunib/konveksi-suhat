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
            $table->id();
            $table->string('ProductID', 10)->primary();
            $table->string('OrnamentID', 10)->nullable();
            $table->string('material', 255);
            $table->string('productName', 255);
            $table->integer('price_per_piece');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
