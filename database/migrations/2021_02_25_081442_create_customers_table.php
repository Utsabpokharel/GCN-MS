<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('city');
            $table->string('district');
            $table->string('permanent_address');
            $table->string('temporary_address')->nullable();
            $table->enum('customer_type',['Organization','Individual']);
            $table->string('frontcitizenshipimage')->nullable();
            $table->string('backcitizenshipimage')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
