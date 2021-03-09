<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentStatusVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_status_verifications', function (Blueprint $table) {
            $table->id();
            $table->string('staffname');
            $table->string('staffcode');
            $table->string('employmentstatus');
            $table->string('period');
            $table->date('approvedon');
            $table->string('approvedby');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment_status_verifications');
    }
}