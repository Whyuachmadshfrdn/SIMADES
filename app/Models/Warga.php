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
        'user_id',
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
        'pendidikan_akhir',
        'pekerjaan',
        'nama_ibu',
        'nama_ayah',
        'alamat',        
        'kelurahan',
        'rt',
        'foto',    
    ];
    protected $dates = ['tgl_lahir'];
    
}
