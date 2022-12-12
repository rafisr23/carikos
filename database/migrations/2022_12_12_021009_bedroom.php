<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedroom', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boarding_house_id');
            $table->string('bedroom_number')->unique();
            $table->text('bedroom_facility');
            $table->integer('bedroom_capacity');
            $table->integer('bedroom_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bedroom');
    }
};