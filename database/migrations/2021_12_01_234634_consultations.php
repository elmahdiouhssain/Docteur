<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Consultations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('cin')->nullable();
            $table->string('poid')->nullable();
            $table->bigInteger('prix')->nullable();
            $table->string('operation');
            $table->dateTime('date_operation');
            $table->text('observation')->nullable();
            //$table->boolean('is_active')->default(False);
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
        Schema::dropIfExists('consultations');
    }
}
