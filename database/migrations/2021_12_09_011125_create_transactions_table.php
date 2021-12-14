<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('motif');
            $table->string('type');
            $table->double('montant');
            $table->foreignId("epargne_id");
            $table->foreignId("agentcaisse_id");
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
        Schema::table('transactions', function(Blueprint $table){
            $table->dropConstrainedForeignId(["epargne_id", "agentcaisse_id"]);
        });
        Schema::dropIfExists('transactions');
    }
}
