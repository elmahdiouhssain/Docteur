<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordonances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('cin')->nullable();
            $table->text('traitment');
            $table->string('usage')->nullable();
            $table->text('observation')->nullable();
            $table->dateTime('date_traitment');
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
        Schema::dropIfExists('ordonnances');
    }
}
