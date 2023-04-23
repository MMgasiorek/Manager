<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisitTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits' ,function(Blueprint $table){
            $table->id();
            $table->bigInteger('client_id')->unsigned();;
            $table->bigInteger('employeer_id')->unsigned();;
            $table->bigInteger('tattoo_id')->unsigned();;
            $table->float('amount');
            $table->dateTime('date');
            $table->float('time');
            $table->float('consume_needle');
            $table->float('consume_mask');
            $table->float('consume_ink');
            $table->float('consume_glove');
            $table->float('consume_liquid');
            $table->float('consume_cream_healing');
            $table->float('consume_soap');
            $table->float('consume_cream_anesthesia');
            $table->float('consume_calque');
            $table->float('consume_holder');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('employeer_id')->references('id')->on('employeers')->onDelete('cascade');
            $table->foreign('tattoo_id')->references('id')->on('tattoos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
