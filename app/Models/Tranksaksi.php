<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='transaksis';
    protected $primaryKey='id';
    protected $fillable=['id','kd_transaksi', 'kd_alat', 'nama', 'kd_member', 'tgl_pinjam', 'tgl_kembali', 'durasi', 'identitas', 'jumlah_bayar', 'total_harga', 'pelunasan', 'metode_pembayaran'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function member():BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
    public function alat():BelongsTo
    {
        return $this->belongsTo(Alat::class);
    }

}


