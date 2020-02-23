<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('idCarrito');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('idProducto')->unsigned();
            $table->json('cantidadproducto');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('usuarios');
            $table->foreign('idProducto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
