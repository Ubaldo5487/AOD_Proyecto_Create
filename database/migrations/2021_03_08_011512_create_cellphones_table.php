<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cellphones', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('color', 50)->nullable();
            $table->tinyInteger('camNumber');
            $table->integer('rearCamera_px');
            $table->integer('frontalCamera_px');
            $table->string('screenSize', 100);
            $table->string('screenResolution', 250);
            $table->integer('memory');
            $table->tinyInteger('ram');
            $table->string('typeOfSystem', 50);
            $table->string('systemVersion', 50);
            $table->integer('batteryCapacity');
            $table->integer('loadingspeed');
            $table->string('description', 255);
            $table->string('comment')->nullable();
            $table->tinyInteger('available')->default(1);
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
        Schema::dropIfExists('cellphones');
    }
}
