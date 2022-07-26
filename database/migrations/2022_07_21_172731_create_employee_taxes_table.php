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
        Schema::create('employee_taxes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('employee_id')->references('id')->on('employees');

            $table->string('npwp_number');
            $table->enum('ptkp_status', ['TK/0', 'TK/1', 'TK/2', 'TK/3', 'K/0', 'K/1', 'K/2', 'K/3']);
            $table->enum('tax_method', ['gross', 'gross-up', 'netto']);
            $table->enum('tax_salary', ['taxable', 'non-taxable']);
            $table->date('taxable_date');
            $table->enum('tax_status', [
                'EMP-PRM',
                'EMP-XPRM',
                'XEMP-CTN',
                'XEMP-XCTN',
                'XPT',
                'XPT-DN',
                'XPRT-CTN',
                'XPRT-XCTN',
                'COMM',
                'XPRT-CTN01',
                'FRL',
                'XEMP-XCTN01',
            ]);
            // TAX STATUS:
            // ===========
            // EMP-PRM: Pegawai tetap
            // EMP-XPRM: Pegawai tidak tetap
            // XEMP-CTN: Bukan pegawai yang bersifat berkesinambungan
            // XEMP-XCTN: Bukan pegawai yang tidak bersifat berkesinambungan
            // XPT: Ekspatriat
            // XPT-DN: Ekspatriat dalam negeri
            // XPRT-CTN: Tenaga ahli yang bersifat berkesinambungan
            // XPRT-XCTN: Tenaga ahli yang tidak bersifat berkesinambungan
            // COMM: Dewan komisaris
            // XPRT-CTN01: Tenaga ahli yang bersifat berkesinambungan >1 PK
            // FRL: Tenaga kerja lepas
            // XEMP-XCTN01: Bukan pegawai yang bersifat berkesinambungan >1 PK
            $table->integer('beginning_netto')->nullable();
            $table->integer('pph21_paid')->nullable();

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
        Schema::dropIfExists('employee_taxes');
    }
};
