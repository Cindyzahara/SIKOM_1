<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //

    //relasi model buku

    public function ulasanbuku() 
    {
        return $this->hasMany(UlasanBuku::class);
    }

    public function koleksipribadi() 
    {
        return $this->hasMany(KoleksiPribadi::class);
    }

    public function kategoribuku_relasi() 
    {
        return $this->hasMany(KategoriBuku_Relasi::class);
    }
}
