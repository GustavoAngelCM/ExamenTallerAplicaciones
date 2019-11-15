<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('idDireccion');
            $table->string('calle', 150)->nullable()->default('Sin especificar');
            $table->integer('numero');
            $table->string('comuna', 100)->nullable()->default('Sin especificar');
            $table->string('ciudad', 100)->nullable()->default('Sin especificar');
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
        Schema::dropIfExists('direccions');
    }
}
