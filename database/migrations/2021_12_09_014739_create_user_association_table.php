<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_association', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->foreignId('association_id');
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
        Schema::table('user_association', function(Blueprint $table){
            $table->dropConstrainedForeignId(["user_id", "association_id"]);
        });
        
        Schema::dropIfExists('user_association');
    }
}
