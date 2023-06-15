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
        Schema::create('bebeks', function (Blueprint $table) {
            $table->id();
            $table->string('tag', 20);
            $table->string('tempat', 20);
            $table->bigInteger('jumlah');
            $table->string('kelamin', 20);
            $table->string('umur', 20);
            $table->string('kategori', 20);
            $table->foreignId('kandang_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebeks');
    }
};
