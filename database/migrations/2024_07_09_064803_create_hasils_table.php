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
        Schema::create('hasils', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pengguna')->unsigned();
            $table->bigInteger('id_jawaban')->unsigned();
            $table->bigInteger('id_jenis_kepribadian')->unsigned();
            $table->foreign('id_pengguna')->references('id')->on('penggunas')->onDelete('cascade');
            $table->foreign('id_jawaban')->references('id')->on('jawabans')->onDelete('cascade');
            $table->foreign('id_jenis_kepribadian')->references('id')->on('jenis_kepribadians')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasils');
    }
};
