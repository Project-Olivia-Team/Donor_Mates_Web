<?php namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $primaryKey = 'donor_id';

    protected $fillable = [
        'NIK',
        'nama',
        'alamat',
        'tgl_lahir',
        'umur',
        'berat_badan',
        'gol_darah',
        'riwayat',
        'no_hp',
        'tgl_donor'
    ];

    protected $casts = [
        'tgl_donor' => 'date',
    ];
}
 ?>