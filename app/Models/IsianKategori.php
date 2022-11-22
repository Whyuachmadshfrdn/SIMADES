<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsianKategori extends Model
{
    use HasFactory;
    public $table = 'isian_kategori';
    protected $fillable = [
        'kategori_id',
        'item',   
    ];
}
