<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];//mengatur hanya coloum id

    public function kategoribuku_relasi()
    {
        return $this->hasMany(KategoriBuku_Relasi::class);
    }
}