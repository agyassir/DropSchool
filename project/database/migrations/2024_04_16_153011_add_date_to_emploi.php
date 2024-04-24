<?php

use App\Models\Date;
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
        Schema::table('emploi', function (Blueprint $table) {

             $table->unsignedBigInteger('date_id')->nullable();
             $table->foreign('date_id')->references('id')->on('date')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emploi', function (Blueprint $table) {
            //
        });
    }
};
