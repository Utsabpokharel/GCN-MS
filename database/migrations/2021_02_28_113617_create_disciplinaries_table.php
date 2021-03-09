<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinaries', function (Blueprint $table) {
            $table->id();
            $table->string('staffname');
            $table->string('casename');
            $table->string('status');
            $table->string('forwardto');
            $table->string('disciplinaryaction');
            $table->longtext('description');
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
        Schema::dropIfExists('disciplinaries');
    }
}