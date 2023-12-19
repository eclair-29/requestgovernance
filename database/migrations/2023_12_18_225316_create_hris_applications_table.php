<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrisApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hris_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_request_id');
            $table->integer('expiration');
            $table->unsignedBigInteger('status_id');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            $table
                ->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('cascade');

            $table
                ->foreign('service_request_id')
                ->references('id')
                ->on('service_requests')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hris_applications');
    }
}
