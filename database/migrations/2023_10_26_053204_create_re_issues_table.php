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
        Schema::create('re_issues', function (Blueprint $table) {
            $table->id();
            $table->string('pnr');
            $table->string('airline');
            $table->string('total_fare');
            $table->string('airline_pnr');
            $table->string('pax_name');
            $table->string('sector');
            $table->string('agency_email');
            $table->string('admin_email');
            $table->text('remarks')->nullable();
            $table->boolean('no_show');
            $table->boolean('purged_pnr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('re_issues');
    }
};
