<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('received_form');
            $table->integer('reference_id');
            $table->integer('chart_of_accounts_id');
            $table->text('desc');
            $table->text('receivable_amount');
            $table->srting('received');
            $table->integer('account_id');
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
        Schema::dropIfExists('credit_vouchers');
    }
}
