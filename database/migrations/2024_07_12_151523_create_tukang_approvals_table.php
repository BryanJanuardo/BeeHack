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
        Schema::create('tukang_proposal', function (Blueprint $table) {
            $table->id('TukangID')->unique();
            $table->string('Nama');
            $table->integer('Umur');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Gender');
            $table->string('NomorTelepon');
            $table->string('Alamat');
            $table->string('CV_path')->nullable();
            $table->string('Photo_path')->nullable();
            $table->text('Deskripsi')->nullable();
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tukang_approvals');
    }
};
