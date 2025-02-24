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
        Schema::create('exam_class', function (Blueprint $table) {
            $table->unsignedinteger('prova_idexam');
            $table->foreign('prova_idexam')->references('id')->on('exam');

            $table->unsignedinteger('classroom_idclassroom');
            $table->foreign('classroom_idclassroom')->references('id')->on('classroom');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_class');
    }
};
