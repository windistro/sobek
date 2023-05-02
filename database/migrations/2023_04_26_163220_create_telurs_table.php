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
        Schema::create('telurs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('telurPembatas');
            $table->bigInteger('totalTelur');
            $table->foreignId('kandang_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telurs');
    }
};
