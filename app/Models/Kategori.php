<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $table = 'kategori';
    protected $fillable = [
        'no',
        'jenis_surat',
        'deskripsi',
        'icon',
        'templete_surat',    
        'persyaratan',    
    ];
}
