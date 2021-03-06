<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_entregas', function (Blueprint $table) {
            $table->increments('idHistorialEntrega');
            $table->dateTime('fechaEntrega');
            $table->integer('cantidad');
            $table->date('fechaVencimiento');
            $table->double('precioUnitario', 6, 2);
            $table->double('precioTotal', 12, 2);
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('idProducto')->on('productos')->onDelete('cascade');
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('idProveedor')->on('proveedors')->onDelete('cascade');
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
        Schema::dropIfExists('historial_entregas');
    }
}
