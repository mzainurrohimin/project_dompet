<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimoni extends Model
{
    use SoftDeletes;

    protected $table = "testimoni";

    protected $fillable = ['testimoni'];
}
