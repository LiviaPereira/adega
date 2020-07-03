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
            $table->string('name', 20);
            $table->string('surname', 45);
            $table->string('email', 50)->unique();
            $table->string('password', 256);
            $table->rememberToken();
            $table->string('cpf', 11)->unique();
            $table->date('birth');
            $table->string('gender', 2);
            $table->string('cellphone', 20);
            $table->string('phone', 20)->nullable()->default(null);
            $table->integer('access_level')->default(0);
            $table->boolean('news');
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
