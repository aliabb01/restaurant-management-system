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
            $table->boolean('isAdmin')->default(false);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->default('default.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->integer('zip_code')->nullable();
            $table->integer('apartment_NO')->nullable();
            $table->integer('building_NO')->nullable();
            $table->integer('district')->nullable();
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
