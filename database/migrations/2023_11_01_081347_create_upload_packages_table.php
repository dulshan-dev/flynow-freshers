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
        Schema::create('upload_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->string('package_name');
            $table->text('description');
            $table->string('title');
            $table->string('upload_image')->nullable();
            $table->string('upload_url');
            $table->foreign('admin_id')->references('id')->on('flynow-admin.admins')->onDelete('cascade'); //this is the way how we create foriegn key to identify user
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_packages');
    }
};