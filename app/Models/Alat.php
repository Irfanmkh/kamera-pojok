<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alat extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='alats';
    protected $primaryKey='id';
    protected $fillable = ['id', 'user_id', 'kd_alat', 'jenis_alat', 'merk', 'harga_sewa', 'stok', 'kondisi'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);   
    }
}
