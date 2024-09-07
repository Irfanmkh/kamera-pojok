<?php

use App\Models\Alat;
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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kd_transaksi')->unique();
            $table->string('kd_alat'); // Kolom foreign key untuk `kd_alat`
            $table->foreign('kd_alat')->references('kd_alat')->on('alats'); // Mendefinisikan foreign key
            $table->string('nama');
            $table->string('kd_member')->nullable(); // Kolom foreign key untuk `kd_member'
            $table->foreign('kd_member')->references('kd_member')->on('members'); // Mendefinisikan foreign key
            $table->datetime('tgl_pinjam');
            $table->datetime('tgl_kembali');
            $table->string('durasi');
            $table->enum('identitas',['E-KTP', 'KTM', 'KP', 'KK', 'AKTA', 'IJAZAH', 'BPKB', 'PASSPORT', 'SIM', 'NPWP', 'BPJS']);
            $table->integer('jumlah_bayar');
            $table->integer('total_harga');
            $table->integer('pelunasan');
            $table->enum('metode_pembayaran',['Cash', 'Transfer']);
            $table->timestamps();
            $table->softDeletes('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
