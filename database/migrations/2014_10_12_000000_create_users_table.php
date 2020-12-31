<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//Integer Unsigned Increment
            $table->string('name');//Varchar Max 255 Caracteres
            $table->string('email')->unique(); // Datos Unicos no repetidos.
            $table->timestamp('email_verified_at')->nullable(); //Fechas puede quedar vacio
            $table->string('password');// Passwords
            //$table->string('avatar'); Se comenta para proseguir con el curso a travez de convenciones
            $table->rememberToken(); // Varchar 100
            $table->timestamps(); // Fehcas | Created_at | Updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
