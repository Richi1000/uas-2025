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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('section_key')->unique()->comment('Identifier section');
            $table->string('title')->nullable()->comment('Judul utama');
            $table->string('subtitle')->nullable()->comment('Sub judul');
            $table->text('description')->nullable()->comment('Deskripsi utama');
            $table->string('image')->nullable()->comment('Path gambar');
            $table->json('metadata')->nullable()->comment('Data tabs (tentang, visi, latar belakang)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
