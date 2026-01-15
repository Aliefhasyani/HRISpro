<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leave_transactions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
                  ->constrained('employees')
                  ->cascadeOnDelete();

            $table->foreignId('leaves_type_id')
                  ->constrained('leaves_types')
                  ->cascadeOnDelete();

      

            $table->year('year');

            $table->integer('change_days');

            $table->string('reason');
     

            $table->timestamps();

      
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leave_transactions');
    }
};
