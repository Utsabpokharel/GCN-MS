<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->string('photo')->nullable();
            $table->string('permanent_address');
            $table->string('temporary_address');
            $table->string('city');
            $table->string('district');
            $table->string('phoneno');
            $table->string('mobileno');
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('title_id')->unsigned();
            $table->bigInteger('level_id')->unsigned();
            $table->string('panno');
            $table->date('joined_date');
            $table->string('email')->unique();
            $table->string('ctzn_front')->nullable();
            $table->string('ctzn_back')->nullable();
            $table->string('resume')->nullable();
            $table->string('appointment_letter')->nullable();
            $table->string('contract_agreement')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('staff');
    }
}
