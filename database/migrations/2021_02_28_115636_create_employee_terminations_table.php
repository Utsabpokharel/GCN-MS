<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTerminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_terminations', function (Blueprint $table) {
            $table->id();
            $table->string('staffname');
            $table->string('staffcode');
            $table->string('changestatus');
            $table->date('noticedate');
            $table->date('serviceenddate');
            $table->string('forwardto');
            $table->string('terminationdocument')->nullable();
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
        Schema::dropIfExists('employee_terminations');
    }
}