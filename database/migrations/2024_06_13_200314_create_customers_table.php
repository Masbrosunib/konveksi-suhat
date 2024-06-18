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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            // $table->unsignedBigInteger('user_id'); // Reference to users table
            $table->string('nama', 255);
            $table->string('email', 255);
            $table->string('phone', 20);
            $table->string('address', 255);
            $table->string('password', 255);
            $table->timestamps();
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->where('role', '=', 'user');
                // ->onDelete('restrict')
                // ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
