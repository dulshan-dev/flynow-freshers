<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'userDB';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('address_verifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('v_id')->notNullable();
            $table->string('unit_no')->notNullable();
            $table->string('street_name')->notNullable();
            $table->string('city')->notNullable();
            $table->string('province')->notNullable();
            $table->string('country')->notNulllable();
            $table->string('address_proof')->notNullable();
            $table->string('address_status')->notNullable();
            $table->timestamps();
            $table->foreign('v_id')->references('id')->on('user_verifications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_verifications');
    }
};
