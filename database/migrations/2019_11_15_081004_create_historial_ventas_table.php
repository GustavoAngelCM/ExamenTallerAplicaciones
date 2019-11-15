<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->double('subTotal', 12, 2);
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('idProducto')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('historial_ventas');
    }
}
