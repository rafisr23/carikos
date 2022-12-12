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
        Schema::create('boarding_house', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('boarding_house_name')->unique();
            $table->string('slug')->unique();    
            $table->string('boarding_house_address');
            $table->string('boarding_house_phone_number');
            $table->enum('boarding_house_category', ['pria', 'wanita', 'campur']);
            $table->text('boarding_house_facility');
            $table->string('boarding_house_photo');
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
        Schema::dropIfExists('boarding_house');
    }
};