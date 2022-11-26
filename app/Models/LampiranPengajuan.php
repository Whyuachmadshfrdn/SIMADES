<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranPengajuan extends Model
{
    use HasFactory;
    public $table = 'lampiran_pengajuan';
    protected $fillable = [
        'pengajuan_id',
        'item',
        'value',   
    ];
}
