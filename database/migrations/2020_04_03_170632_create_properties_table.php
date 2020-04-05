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
            $table->string('numri_parceles');
            $table->string('zona_kadastrale');
            $table->string('lloji');
            $table->string('siperfaqja');
            $table->string('komuna');
            $table->integer('numri_dhomave');
            $table->string('adresa');
            $table->string('ngrohja');
            $table->string('kati');
            $table->integer('numri_banjove');
            $table->string('numri_tel');
            $table->string('foto')->nullable();
            $table->integer('aprovimi');
            $table->text('komenti');
            $table->bigInteger('qmimi');
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
