<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keunggulan extends Model
{
    use SoftDeletes;

    protected $table = "keunggulan";

    protected $fillable = ['title', 'gambar1', 'gambar2'];
}
