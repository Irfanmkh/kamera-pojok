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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('kd_member')->unique();
            $table->string('nama');
            $table->date('tgl_join');
            $table->enum('jenis_member', ['GOLD', 'SILVER']);
            $table->string('no_hp1');
            $table->string('no_hp2')->nullable();
            $table->string('catatan') -> nullable();
            $table->enum('identitas',['E-KTP', 'KTM', 'KP', 'KK', 'AKTA', 'IJAZAH', 'BPKB', 'PASSPORT', 'SIM', 'NPWP', 'BPJS']);
            $table->string('jumlah_trx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
