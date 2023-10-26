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
        Schema::create('photo_verifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('v_id')->notNullable();
            $table->string('webcam_image')->notNullable();
            $table->string('webcam_image_status')->notNullable();
            $table->timestamps();
            $table->foreign('v_id')->references('id')->on('user_verifications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_verifications');
    }
};
