<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('idProduct');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->string('imagen');
            $table->float('precio',3,2);
            $table->unsignedBigInteger('idTipo');
            $table->timestamps();
            $table->foreign('idTipo')->references('idTipo')->on('tipo-productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
