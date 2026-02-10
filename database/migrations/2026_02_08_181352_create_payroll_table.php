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
        Schema::create('payroll', function (Blueprint $table) {
            $table->id();

        $table->foreignId('employee_id')
              ->constrained('employees')
              ->onDelete('cascade');

        $table->integer('month');   // 1 - 12
        $table->integer('year');

        $table->decimal('basic_salary', 12, 2);
        $table->decimal('deductions', 12, 2)->default(0);
        $table->decimal('bonus', 12, 2)->default(0);
        $table->decimal('net_salary', 12, 2);

        $table->enum('payment_status', ['pending', 'paid'])
              ->default('pending');

        $table->timestamp('paid_at')->nullable();

        $table->timestamps();

        $table->unique(['employee_id', 'month', 'year']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll');
    }
};
