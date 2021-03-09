<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_management', function (Blueprint $table) {
            $table->id();
            $table->string('staffname');
            $table->string('bankaccountnumber');
            $table->string('pannumber');
            $table->string('pfdocument');
            $table->string('citdocument');
            $table->string('appointmentdocument');
            $table->string('contractdocument');
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
        Schema::dropIfExists('document_management');
    }
}