<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number')->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('unit')->nullable();
            $table->string('category');
            $table->string('title');
            $table->text('description');
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->enum('status', ['open', 'in_progress', 'solved'])->default('open');
            $table->timestamp('reported_at')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
