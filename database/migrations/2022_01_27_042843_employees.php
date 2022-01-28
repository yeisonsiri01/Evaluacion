<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 100);
            $table->string('apellido', 100);
            $table->integer('deptoid')->unsigned();
            $table->boolean('sexo');
            $table->string('cedula', 14);
            $table->string('direccion', 200);
            $table->string('telcasa', 12);
            $table->string('telmobil',12);
            $table->decimal('salariobase');
            $table->decimal('descuentos');
            $table->decimal('salarioneto');
            $table->timestamp('timestamp');

            $table->foreign('deptoid')
                ->references('id')
                ->on('departments');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
