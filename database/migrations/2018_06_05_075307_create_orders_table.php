<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->uniqid();
            $table->float('minimum_rating', 2, 1);
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedInteger('professional_id')->nullable();
            $table->foreign('professional_id')->references('id')->on('professionals');
            $table->unsignedInteger('order_type_id');
            $table->foreign('order_type_id')->references('id')->on('order_types');
            $table->unsignedInteger('priority_status_id');
            $table->foreign('priority_status_id')->references('id')->on('priority_statuses');
            $table->unsignedInteger('order_status_id');
            $table->foreign('order_status_id')->references('id')->on('order_statuses');
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
        Schema::dropIfExists('orders');
    }
}
