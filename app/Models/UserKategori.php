<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKategori extends Model
{
    use HasFactory;
    protected $table = "user_kategori";
    protected $fillable = [
        'id_kategori',
        "nama_kategori",
        'id_user',
        "nama_user"
       
    ];
    public $timestamps = false;
}
