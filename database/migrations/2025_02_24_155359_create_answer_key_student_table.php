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
        Schema::create('answer_key_student', function (Blueprint $table) {
            $table->id();
            $table->string('pdf');

            $table->integer('student_idstudent');
            $table->foreign('student_idstudent')->references('id')->on('student');

            $table->integer('exam_idexam');
            $table->foreign('exam_idexam')->references('id')->on('exam');

            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_key_student');
    }
};
