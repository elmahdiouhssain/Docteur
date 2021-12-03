<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('fullname')->nullable();
            $table->string('addr')->nullable();
            $table->string('cin')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('genre')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
