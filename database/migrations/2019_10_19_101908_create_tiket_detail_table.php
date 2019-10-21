<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_detail', function (Blueprint $table) {
            $table->bigInteger('ticket_id')->unique();
            $table->dateTime('open_date');
            $table->dateTime('assign_date');
            $table->dateTime('confirm_date');
            $table->dateTime('pickup_date');
            $table->dateTime('deliver_date');
            $table->dateTime('cancel_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiket_detail');
    }
}
