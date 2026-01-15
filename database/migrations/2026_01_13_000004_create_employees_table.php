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
            
            $table->string('employee_name');
            
            $table->string('employee_code');
            
            $table->foreignId('departement_id')
                    ->constrained('departements')
                    ->onDelete('cascade');
            
            $table->foreignId('position_id')
                    ->constrained('position')
                    ->onDelete('cascade');
            
            $table->enum('employment_status',['permanent','contract','intern']);
            
            $table->date('join_date');
            
            $table->decimal('base_salary', 15, 2);
            
            $table->string('bank_name');
            
            $table->string('bank_account');
            
            $table->enum('status',['active','inactive']);
            
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
