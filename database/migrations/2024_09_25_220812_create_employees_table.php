<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('name');
            $table->integer('ext');
            $table->string('city');
            $table->date('start_date');
            $table->decimal('completion', 5, 2);
            $table->timestamps(); // Para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
