<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('quantity');
            $table->double('price');
            $table->text('details');                            
            $table->text('description');
            $table->string('image');
            $table->unsignedBigInteger('categort_id')->nullable();
            $table->double('newprice');
            
            
            
            $table->timestamps();
        });
        Schema::table('offers',function($table){
            $table->foreign('categort_id')->references('id')->on("categories")->onDelete("cascade");
           
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
