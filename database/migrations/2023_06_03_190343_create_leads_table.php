<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('mobile_number');
            $table->string('phone_number')->nullable();
            $table->foreignId('assigned_to')->nullable()->references('id')->on('users')->cascadeOnDelete()->cascadeOnDelete();
            $table->foreignId('created_by')->references('id')->on('users')->cascadeOnDelete()->cascadeOnDelete();
            $table->string('source')->nullable();
            $table->string('status');
            $table->dateTime('next_follow_up')->nullable();
            $table->text('comment')->nullable();
            $table->foreignId('budget_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnDelete();
            $table->string('priority');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
