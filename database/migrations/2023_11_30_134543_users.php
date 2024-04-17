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
        Schema::create('users', function (Blueprint $table) {
            $table->char('nik', 16)->unique()->primary();
            $table->char('no_kk', 16);
            $table->string('nama_lengkap');
            $table->char('telepon', 25);
            $table->string('email');
            $table->string('password');
            $table->string('domisili');
            $table->char('role', 10)->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
