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
        Schema::create('leave_balances', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('employee_id')
                    ->constrained('employees')
                    ->onDelete('cascade');
           
            $table->foreignId('leave_type_id')
                    ->constrained('leaves_types')
                    ->onDelete('cascade');
            
            $table->date('start_date');
            
            $table->date('end_date');
            
            $table->integer('total_days');
            
            $table->enum('status',['approved','pending','rejected']);
            
            $table->foreignId('approved_by')        
                    ->constrained('roles')
                    ->onDelete('cascade');
            
            $table->text('reason');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_balances');
    }
};
