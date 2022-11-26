<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoSurat extends Model
{
    use HasFactory;
    public $table = 'no_surats';
    protected $guarded = ['id'];
}
