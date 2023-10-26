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
        Schema::create('nic_verifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('v_id')->notNullable();
            $table->string('nic_no')->notNullable();
            $table->string('nic_proof_front')->notNullable();
            $table->string('nic_proof_back')->notNullable();
            $table->string('nic_status')->notNullable();
            $table->timestamps();
            $table->foreign('v_id')->references('id')->on('user_verifications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nic_verifications');
    }
};
