<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranKategori extends Model
{
    use HasFactory;
    public $table = 'lampiran_kategori';
    protected $guarded = ['id'];
}
