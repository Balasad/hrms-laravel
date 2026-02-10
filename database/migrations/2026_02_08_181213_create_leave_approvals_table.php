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
        Schema::create('leave_approvals', function (Blueprint $table) {
            $table->id();

        $table->foreignId('leave_request_id')
              ->constrained('leave_requests')
              ->onDelete('cascade');

        $table->foreignId('approver_id')
              ->constrained('employees')
              ->onDelete('cascade');

        $table->string('role'); // TL or Manager

        $table->enum('status', ['pending', 'approved', 'rejected'])
              ->default('pending');

        $table->text('remarks')->nullable();
        $table->timestamp('approved_at')->nullable();

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_approvals');
    }
};
