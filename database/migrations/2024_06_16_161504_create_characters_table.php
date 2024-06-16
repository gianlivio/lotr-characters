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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('wikiUrl')->nullable();
            $table->string('race')->nullable();
            $table->string('birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('death')->nullable();
            $table->string('hair')->nullable();
            $table->string('height')->nullable();
            $table->string('realm')->nullable();
            $table->string('spouse')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
