<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameStoreTable extends Migration
{
    public function up()
    {
        Schema::create('game_store', function (Blueprint $table) {
            $table->integer('store_id')->unsigned();
            $table->integer('game_id')->unsigned();
        }
        );
    }

    public function down()
    {
        Schema::dropIfExists('game_store');
    }
}
