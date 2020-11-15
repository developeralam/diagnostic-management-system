<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('reference_id');
            $table->string('patient_name');
            $table->integer('patient_id');
            $table->string('guardian_name');
            $table->text('complains');
            $table->integer('blood_id');
            $table->integer('sex_id');
            $table->integer('mobile_number');
            $table->integer('age');
            $table->date('booking_date');
            $table->integer('ward_id');
            $table->integer('cabin_id');
            $table->integer('price');
            $table->integer('days');
            $table->integer('bookin_fee');
            $table->integer('discount');
            $table->integer('payable_amount');
            $table->integer('paid_amount');
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
        Schema::dropIfExists('investigations');
    }
}
