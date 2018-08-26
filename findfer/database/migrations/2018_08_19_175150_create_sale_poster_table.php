<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalePosterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_poster', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('sale_id');
            $table->unsignedInteger('poster_id');
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->foreign('poster_id')->references('id')->on('posters');
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
        Schema::dropIfExists('sale_poster');
    }
}
