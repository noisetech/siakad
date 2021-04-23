<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TahunPembelajaran extends Model
{
    use SoftDeletes;

    protected $table = 'tahun_pembelajaran';

    protected $fillabe = [
        'tahun'
    ];
}
