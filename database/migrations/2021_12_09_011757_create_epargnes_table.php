<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpargnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epargnes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('objectif');
            $table->string('periode');
            $table->foreignId("user_id");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('epargnes', function(Blueprint $table){
            $table->dropConstrainedForeignId(["user_id"]);
        });
        Schema::dropIfExists('epargnes');
    }
}
