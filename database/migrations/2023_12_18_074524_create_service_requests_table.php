<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticket_id')->unique();
            $table->unsignedBigInteger('application_type_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('approver_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('request_type_id');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table
                ->foreign('application_type_id')
                ->references('id')
                ->on('application_types')
                ->onDelete('cascade');

            $table
                ->foreign('approver_id')
                ->references('id')
                ->on('approvers')
                ->onDelete('cascade');

            $table
                ->foreign('request_type_id')
                ->references('id')
                ->on('request_types')
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
        Schema::dropIfExists('service_requests');
    }
}
