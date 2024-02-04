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
        Schema::create('leaderboard_onevones', function (Blueprint $table) {
            $table->id();
            $table->integer('rank');
            $table->string('nickname');
            $table->string('race');
            $table->string('league');
            $table->integer('mmr');
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('ties');
            $table->float('winrate');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderboard_onevones');
    }
};
