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
        Schema::table('watchs', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('watchs', function (Blueprint $table) {
            $table->id();
            $table->string('imgs');
            $table->integer('prix');
            $table->string('description',255);
            $table->integer('publier');
            $table->timestamps();
        });
    }
};
