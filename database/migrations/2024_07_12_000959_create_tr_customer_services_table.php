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
        Schema::create('tr_customer_service', function (Blueprint $table) {
            $table->id('CustomerServiceID')->unique();
            $table->integer('TukangID');
            $table->integer('ServiceID');
            $table->string('DeskripsiCustomerService');
            $table->integer('Price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_customer_service');
    }
};
