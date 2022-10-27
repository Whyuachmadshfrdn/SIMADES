<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    public $table = 'wargas';
    protected $fillable = [
        'no',
        'kk',
        'nik_warga',
        'nama_warga',
        'jenis_kelamin',
        'tmpt_lahir',
        'tgl_lahir',
        'gol_darah',
        'agama',
        'status_perkawinan',
        'shdk',
        'nama_ibu',
        'nama_ayah',
        'alamat',        
        'kelurahan',
        'rt',
        'foto',    
    ];
    protected $dates=['tgl_lahir'];
}
