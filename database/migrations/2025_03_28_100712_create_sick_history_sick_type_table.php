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
        Schema::create('sick_history_sick_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sick_history_id')->constrained()->cascadeOnDelete();
            $table->foreignId('sick_type_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->unique(['sick_history_id', 'sick_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sick_history_sick_type');
    }
};
