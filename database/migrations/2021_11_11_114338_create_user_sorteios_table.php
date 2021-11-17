<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSorteiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sorteios', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger ('user_id_1');
            $table -> unsignedBigInteger ('user_id_2');
            $table -> unsignedBigInteger ('id_sorteio');
            $table -> foreign('user_id_1') -> references('id') ->on ('users');
            $table -> foreign('user_id_2') -> references('id') ->on ('users');
            $table -> foreign('id_sorteio') -> references('id') ->on ('sorteios');
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
        Schema::dropIfExists('user_sorteios');
    }
}
