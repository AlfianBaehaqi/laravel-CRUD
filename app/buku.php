<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'list';
    protected $fillable = ['judul', 'pengarang', 'kategori', 'tahun_terbit', 'penerbit'];
}
