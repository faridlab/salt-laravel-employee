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
        Schema::create('employee_contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('employee_id')->references('id')->on('employees');

            $table->string('name');
            $table->enum('relationship', [
                'father',
                'mother',
                'sibling',
                'spouse',
                'child',
                'cousin',
                'nibling',
                'parent-in-law',
                'brother-in-law',
                'sister-in-law',
                'uncle',
                'aunt',
            ]);
            $table->string('phone');
            $table->string('email')->nullable();

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
        Schema::dropIfExists('employee_contacts');
    }
};
