<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("hitdice");
            $table->string("size");
            $table->string("languages");
            $table->json("weapon_proficiencies")->nullable();
            $table->json("armor_proficiencies")->nullable();
            $table->json("other_proficiencies")->nullable();
            $table->json("traits");
            $table->integer("walkspeed")->default(0);
            $table->integer("flyspeed")->default(0);
            $table->integer("swimspeed")->default(0);
            $table->integer("climbspeed")->default(0);
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
        Schema::dropIfExists('races');
    }
}
