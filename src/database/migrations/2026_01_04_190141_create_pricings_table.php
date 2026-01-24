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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
             $table->string('section_key')->unique(); // pricing_main
            $table->string('small_title'); // Pricing
            $table->string('title');       // Pricing & Plans
            $table->text('description')->nullable();
            $table->json('plans'); // semua paket + fitur di sini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
