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
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('makanan_id')->nullable();
            $table->foreign('makanan_id')->references('id')->on('makanan');
            $table->unsignedBigInteger('minuman_id')->nullable();
            $table->foreign('minuman_id')->references('id')->on('minuman');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
