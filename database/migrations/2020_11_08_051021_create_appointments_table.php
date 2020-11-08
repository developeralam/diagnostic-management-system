<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_type_id');
            $table->integer('reference_id');
            $table->string('patient_name');
            $table->integer('patient_id');
            $table->integer('patient_age');
            $table->integer('sex_id');
            $table->integer('mobile_number');
            $table->text('complains');
            $table->date('date');
            $table->integer('doctor_id');
            $table->integer('time_schedule_id');
            $table->integer('serial_number');
            $table->integer('doctor_fee_id');
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
        Schema::dropIfExists('appointments');
    }
}
