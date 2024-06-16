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
        Schema::create('ornaments', function (Blueprint $table) {
            $table->id();
            $table->string('OrnamentID', 10)->primary();
            $table->string('ornamentName', 255);
            $table->string('material', 255);
            $table->integer('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ornaments');
    }
};
