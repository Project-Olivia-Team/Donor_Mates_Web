<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';

    protected $primaryKey = 'berita_id';

    protected $fillable = [
        'judul',
        'gambar',
        'tanggal_upload',
        'penulis',
        'isi_berita',
    ];
}
