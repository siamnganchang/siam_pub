<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_id')->nullable();
            // $table->bigInteger('work_id')->unsigned()->nullable()->index();
            // $table->bigInteger('design_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->string('image_path')->nullable();
           
            // $table->foreign('work_id')->references('id')->on('works');
            // $table->foreign('design_id')->references('id')->on('designs');
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
        Schema::dropIfExists('images');
    }
};
