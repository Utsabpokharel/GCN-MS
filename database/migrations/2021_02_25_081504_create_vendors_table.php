<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->string('registrationnumber')->nullable();
            $table->string('panvatnumber')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('city');
            $table->string('district');
            $table->string('permanent_address');
            $table->string('temporary_address');
            $table->enum('vendor_type', ['Organization', 'Individual']);
            $table->string('firstcontactperson')->nullable();
            $table->string('firstemail')->nullable();
            $table->string('firstphone')->nullable();
            $table->string('secondcontactperson')->nullable();
            $table->string('secondemail')->nullable();
            $table->string('secondphone')->nullable();
            $table->tinyinteger('ifuser')->default(0);
            $table->string('ctzn_front')->nullable();
            $table->string('ctzn_back')->nullable();
            $table->string('resume')->nullable();
            $table->string('offer_letter')->nullable();
            $table->string('joining_letter')->nullable();
            $table->string('contract_agreement')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
