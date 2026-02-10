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
        Schema::create('project_assignments', function (Blueprint $table) {
            $table->id();

        $table->foreignId('project_id')
              ->constrained('projects')
              ->onDelete('cascade');

        $table->foreignId('employee_id')
              ->constrained('employees')
              ->onDelete('cascade');

        $table->enum('role_in_project', ['TL', 'Member'])
              ->default('Member');

        $table->foreignId('assigned_by')
              ->nullable()
              ->constrained('employees')
              ->nullOnDelete();

        $table->timestamp('assigned_at')->nullable();

        $table->timestamps();

        $table->unique(['project_id', 'employee_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_assignments');
    }
};
