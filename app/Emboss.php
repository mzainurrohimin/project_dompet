<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emboss extends Model
{
    use SoftDeletes;

    protected $table = "emboss";

    protected $fillable = ['title', 'gambar'];
}
