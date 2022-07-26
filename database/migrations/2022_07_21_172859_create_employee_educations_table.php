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
        Schema::create('employee_educations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('employee_id')->references('id')->on('employees');

            $table->string('instituion_name');
            $table->enum('degree', [
                'Kindergarten',
                'Elementary School',
                'Junior High School',
                'Senior High School',
                'Vocational High School',
                'Associate degree',
                'Bachelor Degree',
                'Master Degree',
                'Doctoral Degree',
                'Professional Education',
                'Military Education',
            ]);
            $table->string('major');
            $table->string('field'); // Field of Study
            $table->float('score')->nullable();
            $table->year('start_year');
            $table->year('end_year')->nullable();

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
        Schema::dropIfExists('employee_educations');
    }
};
