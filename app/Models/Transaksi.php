<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function tarif() {
        return $this->belongsTo(Tarif::class);
    }

    use HasFactory;

    protected $table = 'transaksis';
    protected $fillable = ['id', 'tanggal', 'jumlahbeli', 'nometer', 'totalkwh', 'token', 'tarif_id', 'user_id'];
}
