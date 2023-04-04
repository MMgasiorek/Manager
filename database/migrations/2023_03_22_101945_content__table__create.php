<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContentTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('content_area_id')->unsigned();
            $table->string('column_type')->nullable();

            $table->string('block_margin_top')->nullable();
            $table->string('block_margin_bottom')->nullable();


            $table->string('title')->nullable();
            $table->string('title_color')->nullable();
            $table->string('title_size')->nullable();
            $table->string('title_position')->nullable();
            $table->string('title_margin_top')->nullable();
            $table->string('title_margin_bottom')->nullable();

            $table->longText('content')->nullable();
            $table->string('content_color')->nullable();
            $table->string('content_size')->nullable();
            $table->string('content_position')->nullable();
            $table->string('content_margin_top')->nullable();
            $table->string('content_margin_bottom')->nullable();


            $table->string('block_2_margin_top')->nullable();
            $table->string('block_2_margin_bottom')->nullable();

            $table->string('title_2')->nullable();
            $table->string('title_color_2')->nullable();
            $table->string('title_size_2')->nullable();
            $table->string('title_position_2')->nullable();
            $table->string('title_margin_top_2')->nullable();
            $table->string('title_margin_bottom_2')->nullable();

            $table->longText('content_2')->nullable();
            $table->string('content_color_2')->nullable();
            $table->string('content_size_2')->nullable();
            $table->string('content_position_2')->nullable();
            $table->string('content_margin_top_2')->nullable();
            $table->string('content_margin_bottom_2')->nullable(); 

            $table->timestamps();
            
            $table->foreign('content_area_id')->references('id')->on('content_areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
