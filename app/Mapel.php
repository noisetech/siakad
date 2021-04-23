<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mapel extends Model
{
    use SoftDeletes;

    protected $table = 'mapel';

    protected $fillable = [
        'nama', 'guru_id'
    ];

    public function guru(){
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
