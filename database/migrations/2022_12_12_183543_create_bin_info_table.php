<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bin_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bin_number')->default(0);
            $table->integer('instrument_id')->default(0);
            $table->string('type',50)->comment('0=local,1=internatinal');
            $table->string('product_name')->default(0);
            $table->string('network_company')->default(0);
            $table->string('category',50)->default(0);
            $table->string('bank')->default(0);
            $table->smallInteger('is_emi')->default(0);
            $table->string('updated_at',20)->nullable();
            $table->string('deleted_at',20)->nullable();
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
        Schema::dropIfExists('bin_info');
    }
}
