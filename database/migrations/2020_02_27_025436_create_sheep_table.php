<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheep_add', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('zagon');
            $table->text('day');
            $table->timestamps();
        });
        Schema::create('sheep_delete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('zagon');
            $table->text('day');
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
        Schema::dropIfExists('sheep');
    }
}
