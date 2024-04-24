<?php

use App\Models\Classe;
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
        Schema::create('emploi', function (Blueprint $table) {
            $table->id();
            $table->time('begin');
            $table->time('end');
            $table->foreignIdFor(
                Classe::class
            )->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi');
    }
};
