<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("race_id")->constrained() ;
            $table->foreignId("class_id")->constrained();
            $table->integer("level");
            $table->integer("xp");
            $table->integer("hp");
            $table->integer("maxHp");
            $table->foreignId("inventory_id")->constrained();
            $table->integer("initiative");
            $table->integer("armorclass");
            $table->integer("str_abil");
            $table->integer("dex_abil");
            $table->integer("con_abil");
            $table->integer("int_abil");
            $table->integer("wis_abil");
            $table->integer("cha_abil");
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
        Schema::dropIfExists('characters');
    }
}
