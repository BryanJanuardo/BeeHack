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
        Schema::create('tukang', function (Blueprint $table) {
            $table->id('TukangID')->unique();
            $table->string('Nama');
            $table->integer('Umur');
            $table->string('Email')->unique();
            $table->string('Gender');
            $table->string('NomorTelepon');
            $table->string('Address');
            $table->string('CV_path');
            $table->string('Photo_path');
            $table->text('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tukang');
    }
};
