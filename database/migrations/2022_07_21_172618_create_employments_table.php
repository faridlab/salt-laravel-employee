<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('employee_id')->references('id')->on('employees');
            $table->enum('employment_status', ['permanent', 'contract', 'probation', 'assosiate']);
            $table->date('join_date');
            $table->date('end_join_date')->nullable();

            $table->foreignUuid('organization_id')->references('id')->on('organizations');
            $table->foreignUuid('department_id')->references('id')->on('organization_structures');
            $table->foreignUuid('level_id')->references('id')->on('organization_structures');
            $table->foreignUuid('position_id')->references('id')->on('organization_structures');

            $table->foreignUuid('direct_manager_id')->references('id')->on('employees')->nullable();
            $table->enum('status', ['active', 'inactive']);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employments');
    }
};
