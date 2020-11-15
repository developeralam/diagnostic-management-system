<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debit_vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('paid_to');
            $table->integer('reference_id');
            $table->date('payment_date');
            $table->integer('chart_of_accounts_id');
            $table->text('desc');
            $table->integer('payable_amount');
            $table->integer('paid');
            $table->integer('account_id');
            $table->integer('method_id');
            $table->integer('check_no');
            $table->integer('due_amount');
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
        Schema::dropIfExists('debit_vouchers');
    }
}
