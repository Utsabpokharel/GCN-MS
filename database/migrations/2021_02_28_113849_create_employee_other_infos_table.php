<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeOtherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_other_infos', function (Blueprint $table) {
            $table->id();
            $table->string('staffcode');
            $table->string('title');
            $table->string('organisation')->nullable();
            $table->string('fathername');
            $table->string('mothername');
            $table->string('grandfathername');
            $table->string('parentcontactnumber');
            $table->string('maritalstatus');
            $table->string('spousename')->nullable();
            $table->string('emergencyperson')->nullable();
            $table->string('emergencynumber')->nullable();
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
        Schema::dropIfExists('employee_other_infos');
    }
}