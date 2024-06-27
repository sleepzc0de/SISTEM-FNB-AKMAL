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
        Schema::create('makanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 225);
            $table->string('gambar')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('tersedia', 225);
            $table->string('waktu_penyajian', 225);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan');
    }
};
