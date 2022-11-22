<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsianPengajuan extends Model
{
    use HasFactory;
    public $table = 'isian_pengajuan';
    protected $fillable = [
        'pengajuan_id',
        'item',
        'value',   
    ];
}
