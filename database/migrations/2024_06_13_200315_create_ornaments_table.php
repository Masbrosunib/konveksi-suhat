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
            $table->id('ornament_id');
            $table->string('ornament_name', 255);
            $table->text('ornament_description');
            $table->integer('ornament_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ornaments');
    }
};
