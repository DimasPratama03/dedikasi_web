<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullyFundedPremiumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fully_funded_premium', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama_lengkap');
            $table->string('domisili');
            $table->string('instansi');
            $table->string('nomor_whatsapp');
            $table->string('username_instagram');
            $table->text('alasan_mengikuti');
            $table->string('divisi');
            $table->text('alasan_divisi');
            $table->string('riwayat_penyakit')->nullable();
            $table->string('kondisi_lapangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fully_funded_premium');
    }
}
