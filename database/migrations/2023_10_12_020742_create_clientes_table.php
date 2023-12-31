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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('clientCURP');
            $table->string('clientName');
            $table->integer('clientAge');
            $table->string('clientAddress');
            $table->string('clientPostalCode');
            $table->string('clientPhone');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('fileName')->nullable();
            $table->string('filePath')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};