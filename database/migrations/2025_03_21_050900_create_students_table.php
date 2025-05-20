<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students_tb_', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('stud_no');
            $table->string('stud_fname');
            $table->string('stud_mname');
            $table->string('stud_lname');
            $table->date('stud_bday');
            $table->integer('zip');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_tb_');
    }
};
