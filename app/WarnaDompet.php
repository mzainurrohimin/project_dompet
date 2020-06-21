<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WarnaDompet extends Model
{
    use SoftDeletes;

    protected $table = "warnadompet";

    protected $fillable = ['warna1', 'gambar1', 'warna2', 'gambar2'];
}
