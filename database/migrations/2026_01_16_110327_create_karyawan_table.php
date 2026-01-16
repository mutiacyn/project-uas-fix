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
            $table->string('alamat')->nullable();
            $table->timestamps();

            // Foreign keys (hanya sekali, pakai foreignId)
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignId('divisi_id')->nullable()->constrained('divisions')->nullOnDelete();
            $table->foreignId('jabatan_id')->nullable()->constrained('positions')->nullOnDelete();
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
