<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('idProveedor');
            $table->string('nombreProveedor', 100);
            $table->string('web', 50)->nullable()->default('Sin especificar');
            $table->string('nit', 20);
            $table->integer('telefono')->nullable();
            $table->integer('direccion_id')->unsigned();
            $table->foreign('direccion_id')->references('idDireccion')->on('direccions')->onDelete('cascade');
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
        Schema::dropIfExists('proveedors');
    }
}
