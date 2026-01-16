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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id('karyawan_id'); 
            $table->date('birthday')->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('phone', 20)->nullable();
            $table->timestamps(); // created_at & updated_at
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('divisi_id')->nullable();
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->string('alamat')->nullable();

            // Optional: foreign key constraints
            $table->foreignId('divisi_id')->nullable()->constrained('divisions')->nullOnDelete();
            $table->foreignId('jabatan_id')->nullable()->constrained('positions')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
