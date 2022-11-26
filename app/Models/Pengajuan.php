<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    public $table = 'pengajuan';
    protected $guarded = ['id'];

    

    public function kategori()
    {
        return $this->hasOne(Kategori::class,'id','kategori_id');
    }
}
