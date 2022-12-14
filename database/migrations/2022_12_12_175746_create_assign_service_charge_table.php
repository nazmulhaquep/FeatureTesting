<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignServiceChargeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_service_charge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('merchant_id');
            $table->integer('gateway_id')->default(0);
            $table->integer('gateway_type_id')->default(0);
            $table->integer('network_type_id')->default(0);
            $table->integer('store_id');
            $table->float('min_amount')->default(0);
            $table->float('max_amount')->default(0);
            $table->double('service_charge',8,4)->nullable();
            $table->double('tdr_charge',8,6)->nullable();
            $table->double('transaction_fee',8,4)->nullable();
            $table->float('cashback_percent')->default(0);
            $table->float('cashback_max_amount')->default(0);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_service_charge');
    }
}
