<?php

use App\Models\Evidence;
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
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->char('user_id', 16);
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('jenis_berkas');
            $table->char('status', 10);
            $table->string('pesan')->nullable();
            $table->timestamp('estimasi')->default(now()->addDays(3));
            $table->timestamps();

            $table->foreign('user_id')->references('nik')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonans');
    }
};
