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
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('employee_number')->comment('Nomor Induk Karyawan');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile_phone');
            $table->string('phone')->nullable();
            $table->string('birth_place');
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->enum('martial_status', ['single', 'married', 'widow', 'widower']);
            $table->enum('blood_type', ['A', 'B', 'AB', 'O'])->nullable();
            $table->foreignUuid('religion_id')->references('id')->on('religions')->nullable();

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
        Schema::dropIfExists('employees');
    }
};
