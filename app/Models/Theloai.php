<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tentheloai','kichhoat','slug_theloai','mota'
    ];
    protected $primaryKey = 'id';
    protected $table = 'theloai';
}
