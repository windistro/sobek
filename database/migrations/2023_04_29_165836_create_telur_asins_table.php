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
        Schema::create('telur_asins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('totalTelurAsin');
            $table->date('tanggalPembuatan');
            $table->date('tanggalKadaluarsa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telur_asins');
    }
};
