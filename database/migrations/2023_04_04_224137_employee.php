<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    //
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100)->index();
            $table->string('lastname',100);
            $table->string('email', 100);
            $table->string('phone', 100)->nullable();
            $table->dateTime('birthday')->nullable();
            $table->unsignedBigInteger('supervisedby_id')->nullable();
            $table->foreign('supervisedby_id')->references('id')->on('employee')->onDelete('cascade');
            
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
