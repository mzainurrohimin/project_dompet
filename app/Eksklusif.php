<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eksklusif extends Model
{
    use SoftDeletes;

    protected $table = "eksklusif";

    protected $fillable = ['title', 'gambar1', 'gambar2', 'gambar3'];
}
