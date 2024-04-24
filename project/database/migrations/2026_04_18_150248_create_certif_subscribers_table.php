<?php

use App\Models\certificate;
use App\Models\User;
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
        Schema::create('certif_subscribers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(
                certificate::class
             )->constrained()->nullable();
             $table->foreignIdFor(
                User::class
             )->constrained()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certif_subscribers');
    }
};
