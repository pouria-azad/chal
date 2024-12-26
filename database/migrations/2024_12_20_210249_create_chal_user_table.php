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
        Schema::create('chal_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chal_id');
            $table->unsignedBigInteger('user_id');

            $table->boolean('status')->default(false);

            $table->foreign('chal_id')->references('id')->on('challenges');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chal_user');
    }
};
