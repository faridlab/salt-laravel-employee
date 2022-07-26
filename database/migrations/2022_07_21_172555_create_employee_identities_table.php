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
        Schema::create('employee_identities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('employee_id')->references('id')->on('employees');
            $table->enum('identity_type', ['ID', 'passport']);
            $table->string('identity_number');
            $table->date('identity_expiry_date')->nullable();
            $table->boolean('is_permanent')->default(false);

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
        Schema::dropIfExists('employee_identities');
    }
};
