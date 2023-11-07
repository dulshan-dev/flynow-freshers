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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('PCC');
            $table->string('existing_booking_pnr');
            $table->json('tickets_to_be_reissued');
            $table->string('new_booking_pnr')->nullable();
            $table->boolean('is_no_show');
            $table->boolean('reissue_type');
            $table->string('service_type');
            $table->text('details');
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
