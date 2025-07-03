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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();

            $table->string('fullname')->nullable();
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('degree')->nullable(); // junyor, middle, senior
            $table->string('internship')->nullable(); // tajriba
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            
            $table->string('phone')->nullable();
            $table->string('telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
    }
};
