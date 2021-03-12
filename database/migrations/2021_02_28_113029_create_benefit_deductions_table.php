<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefit_deductions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('bankno');
            $table->float('amount');
            $table->float('currency');
            $table->string('payment');
            $table->string('benefit');
            $table->longText('reason');
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
        Schema::dropIfExists('benefit_deductions');
    }
}
