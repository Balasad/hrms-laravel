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
        Schema::create('employees', function (Blueprint $table) {
          $table->id();

        $table->foreignId('user_id')
              ->constrained('users')
              ->onDelete('cascade');

        $table->string('employee_code')->unique();

        $table->foreignId('department_id')
              ->nullable()
              ->constrained('departments')
              ->nullOnDelete();

        $table->string('designation')->nullable();
        $table->date('joining_date')->nullable();
        $table->decimal('salary', 12, 2)->nullable();

        $table->string('phone')->nullable();
        $table->text('address')->nullable();

        $table->foreignId('reporting_manager_id')
              ->nullable()
              ->constrained('employees')
              ->nullOnDelete();

        $table->enum('status', ['active', 'resigned', 'terminated'])
              ->default('active');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
