<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    use HasFactory;
    protected $primaryKey = "id_detail_peminjaman";
    protected $table = "detail_peminjaman";
    protected $guarded = [];
    public function buku(){
        return $this->belongsTo(Buku::class, 'id_buku');
    }
    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
    }

}
