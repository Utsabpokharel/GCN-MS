<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeResignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_resignations', function (Blueprint $table) {
            $table->id();
            $table->string('staffname');
            $table->string('staffcode');
            $table->date('noticedate');
            $table->string('forwardto');
            $table->date('desireresigndate');
            $table->string('resignationdocument')->nullable();
            $table->longText('reason');
            $table->longText('details');
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
        Schema::dropIfExists('employee_resignations');
    }
}