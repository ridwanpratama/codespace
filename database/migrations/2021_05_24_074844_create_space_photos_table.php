<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('space_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('space_id');
            $table->string('path');
            $table->timestamps();

            $table->foreign('space_id')->references('id')->on('spaces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('space_photos');
    }
}
