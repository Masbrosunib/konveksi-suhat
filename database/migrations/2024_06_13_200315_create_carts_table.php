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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerID', 10);
            $table->string('ProductID', 10);
            $table->integer('quantity');
            $table->integer('price');
            $table->string('description', 255)->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
