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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventname',50)->nullable();
            $table->string('organizationname',50)->nullable();
            $table->longText('description',255)->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('user_id')->nullable();
            $table->string('event_status')->nullable();
            $table->string('usertype')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
