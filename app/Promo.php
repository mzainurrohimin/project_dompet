<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promo extends Model
{
    use SoftDeletes;

    protected $table = "promo";

    protected $fillable = ['nama_promo', 'stock_promo', 'waktu_promo', 'gambar'];
}
