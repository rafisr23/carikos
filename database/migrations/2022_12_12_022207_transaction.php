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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('boarding_house_id');
            $table->foreignId('bedroom_id');
            $table->date('transaction_start_date');
            $table->date('transaction_end_date');
            $table->integer('transaction_total_price');
            $table->date('transaction_payment_deadline');
            $table->date('transaction_payment_date');
            $table->enum('transaction_status', ['pending', 'approved', 'rejected']);
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
        Schema::dropIfExists('transaction');
    }
};