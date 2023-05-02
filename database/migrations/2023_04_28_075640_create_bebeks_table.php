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
            $table->bigInteger('umur');
            $table->string('status', 20);
            $table->bigInteger('telurWeekly');
            $table->foreignId('kandang_id')->nullable();
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
