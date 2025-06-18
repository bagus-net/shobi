<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('asal_sekolah');
            $table->string('email')->unique();
            $table->string('nomor_whatsapp');
            $table->string('lomba');
            $table->string('pas_foto_path');
            $table->string('scan_kartu_pelajar_path');
            $table->string('bukti_follow_path');
            $table->string('bukti_posting_twibbon_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
}
