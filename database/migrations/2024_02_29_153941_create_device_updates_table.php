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
        Schema::create('device_updates', function (Blueprint $table) {
            $table->id();
            $table->longText('data');
            $table->foreignId('device_id')->constrained()->cascadeOnDelete();
            // if sent at is null , set it as Carbon::now()
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_updates');
    }
};
