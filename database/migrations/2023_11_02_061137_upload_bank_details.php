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
        Schema::create('upload_bank_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->string('existing_bank_details');
            $table->string('bank_name');
            $table->string('acc_number');
            $table->string('IFSC_code');
            $table->string('address');
            $table->foreign('admin_id')->references('id')->on('flynow-admin.admins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('upload_bank_details');
    }
};
