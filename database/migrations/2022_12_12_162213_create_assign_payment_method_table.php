<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignPaymentMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_payment_method', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gateway_id');
            $table->integer('merchant_id');
            $table->integer('network_type_id')->default(0);
            $table->integer('gateway_type_id')->default(0);
            $table->string('method_type',50)->default('');
            $table->integer('gateway_status')->default(1);
            $table->integer('created_by')->default(1);
            $table->integer('updated_by')->default(1);
            $table->string('updated_at',50)->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_payment_method');
    }
}
