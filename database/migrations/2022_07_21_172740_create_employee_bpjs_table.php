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
        Schema::create('employee_bpjs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('employee_id')->references('id')->on('employees');
            $table->string('bpjs_ketenagakerjaan_number');
            $table->string('npp_bpjs_ketenagakerjaan');

            $table->date('bpjs_ketenagakerjaan_date');
            $table->string('bpjs_kesehatan_number');
            $table->enum('bpjs_kesehatan_family', [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

            $table->date('bpjs_kesehatan_date');
            $table->enum('bpjs_kesehatan_cost', [
                'by-company', 'by-employee'
            ]);
            $table->enum('jht_cost', [
                'not-paid', 'by-company', 'by-employee'
            ]);
            $table->enum('jaminan_pensiun_cost', [
                'not-paid', 'by-company', 'by-employee'
            ]);
            $table->date('jaminan_pensiun_date');

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
        Schema::dropIfExists('employee_bpjs');
    }
};
