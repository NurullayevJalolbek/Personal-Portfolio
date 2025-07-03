<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic_name')->nullable();

            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('image')->nullable();
            $table->string('language_certificate')->nullable();
            $table->string('red_passport')->nullable();
            $table->string('green_pasport')->nullable();
            $table->string('attestst')->nullable();
            $table->string('diplom')->nullable();
            $table->string('parents_pasport')->nullable();
            $table->string('motivation_letter')->nullable();
            $table->string('recamadition_letter')->nullable();
            $table->string('parents_salary')->nullable();
            $table->string('apostil')->nullable();
            $table->string('dov')->nullable();
            $table->string('insurance')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('visa')->nullable();

            $table->string('status')->default('active');
            $table->integer('enter_data_count')->default(0);

            $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('set null');
            $table->foreignId('program_id')->nullable()->constrained('programs')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
