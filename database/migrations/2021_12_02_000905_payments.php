<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('cin');
            $table->string('date');
            $table->string('genre');
            $table->bigInteger('prix');
            $table->string('operation');
            $table->text('observation');

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
        Schema::dropIfExists('payments');
    }
}