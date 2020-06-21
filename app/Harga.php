<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Harga extends Model
{
    use SoftDeletes;

    protected $table = "harga";

    protected $fillable = ['harga_normal', 'harga_diskon', 'diskon', 'potongan_ongkir'];
}
