<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('factura', 20);
            $table->string('observacion', 150)->nullable()->default('Sin Observacion');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('idCliente')->on('clientes')->onDelete('cascade');
            $table->integer('venta_id')->unsigned();
            $table->foreign('venta_id')->references('idVenta')->on('ventas')->onDelete('cascade');
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
        Schema::dropIfExists('compras');
    }
}
