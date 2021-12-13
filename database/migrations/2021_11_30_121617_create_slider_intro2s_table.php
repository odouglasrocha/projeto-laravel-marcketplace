<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderIntro2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_intro2s', function (Blueprint $table) {
            $table->id();
            $table->string('slider_img');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
            $table->text('description4')->nullable();
            $table->text('description5')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('slider_intro2s');
    }
}
