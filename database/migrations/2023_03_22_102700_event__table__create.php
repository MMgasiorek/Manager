<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events' ,function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->date('start');
            $table->date('end');
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('employeer_id')->unsigned();
            $table->float('width');
            $table->float('height');
            $table->string('place');
            $table->string('color');
            $table->longText('description');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('employeer_id')->references('id')->on('employeers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
