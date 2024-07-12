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
        Schema::create('tr_order_service', function (Blueprint $table) {
            $table->id('OrderID')->unique();
            $table->foreignId('CustomerID')->constrained('customer', 'CustomerID')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('CustomerServiceID')->constrained('tr_customer_service', 'CustomerServiceID')->onDelete('cascade')->onUpdate('cascade');
            $table->date('StartedDate');
            $table->date('FinishedDate');
            $table->float('Rating Service');
            $table->text('Comment');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_order_service');
    }
};
