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
            $table->id();
            $table->string('nome');
            $table->string('apelido')->unique();
            $table->string('sexo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('data_nasc');
            $table->string('password');
            $table->string('genero_fav');
            $table->string('foto')->nullable();
            $table->string('tipo');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
