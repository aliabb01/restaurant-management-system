<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->BigIncrements('id');
           
            $table->string('title');
            $table->double('Price');
            $table->string('Description');
            $table->integer('Calorie');
            $table->string('image');
            $table->unsignedBigInteger('Category_name')->null();
            $table->foreign('Category_name')->references('id')->on('dishcategories');
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
        Schema::dropIfExists('dishes');
    }
}
