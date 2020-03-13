<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            // $table->string('Name');
            // $table->string('password');
            // $table->string('email')->unique();
            $table->string('cnic_no',13);
            // $table->string('phone_no',11);
            $table->text('address');
            $table->date('dob');
            $table->string('profession');
            $table->integer('working_exp');
            $table->unsignedBigInteger('company_id');
            $table->text('description');
            // $table->string('image');
            $table->string('tags');
            $table->integer('price');
            $table->timestamps();

            // $table->foreign('company_id')->references('id')->on('user_company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_employee');
    }
}
