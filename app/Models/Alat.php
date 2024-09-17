<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alat extends Model
{
    use HasFactory;

    protected $table='alats';
    protected $primaryKey='id';
    protected $fillable = ['id', 'kd_alat', 'jenis_alat', 'merk', 'harga_sewa', 'stok', 'kondisi'];

}
