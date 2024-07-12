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
        Schema::create('service_type_proposal', function (Blueprint $table) {
            $table->id('ServiceTypeApprovalID');
            $table->string('NamaService');
            $table->text('Deskripsi');
            $table->string('Status');
            $table->date('ProposedDate');
            $table->date('ApprovedDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_type_proposals');
    }
};
