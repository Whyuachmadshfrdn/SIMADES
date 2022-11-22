<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    public $table = 'staff';
    protected $fillable = [
        'no',
        'nip_staff',
        'nama_staff',
        'tmpt_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'jabatan',
        'no_telp',
        'foto',    
    ];
    protected $dates = ['tgl_lahir'];
}
