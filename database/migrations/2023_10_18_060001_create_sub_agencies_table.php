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
        Schema::create('sub_agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->unsignedBigInteger('user_id');
            $table->string('agency_name');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_agencies');
    }
};
