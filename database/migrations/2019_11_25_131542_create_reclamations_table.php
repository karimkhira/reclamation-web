<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message');
            $table->unsignedBigInteger('usercreation_id');
                    $table->foreign('usercreation_id')->references('id')->on('users');
           
            $table->unsignedBigInteger('etat_id');
                    $table->foreign('etat_id')->references('id')->on('etats');
            $table->unsignedBigInteger('userreparation_id');
                    $table->foreign('userreparation_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('reclamations');
    }
}
