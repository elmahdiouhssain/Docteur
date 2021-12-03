<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
        Schema::create('apointments', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('cin')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('title');
            $table->text('observation')->nullable();
            $table->boolean('is_donee')->default(False);
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
        //
        Schema::dropIfExists('apointments');
    }
}
