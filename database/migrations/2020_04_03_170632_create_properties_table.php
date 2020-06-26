<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('llojishpalljes');
            $table->string('lloji');
            $table->string('ballkonat');
            $table->string('burimi_nxemjes');
            $table->string('siperfaqja');
            $table->string('komuna');
            $table->integer('numri_dhomave')->nullable();
            $table->string('adresa');
            $table->string('ngrohja')->nullable();
            $table->string('kati')->nullable();
            $table->integer('numri_banjove')->nullable();
            $table->string('numri_tel');
            $table->text('foto')->nullable();
            $table->integer('aprovimi');
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->text('komenti');
            $table->bigInteger('qmimi');
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
