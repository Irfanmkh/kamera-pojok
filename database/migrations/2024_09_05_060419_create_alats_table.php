<?php

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
        Schema::create('alats', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('kd_alat')->unique();
            $table->string('jenis_alat');
            $table->string('merk');
            $table->integer('harga_sewa');
            $table->integer('stok');
            $table->enum('kondisi', ['baik','rusak']);
            $table->timestamps();
            $table->softDeletes('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alats');
    }
};
