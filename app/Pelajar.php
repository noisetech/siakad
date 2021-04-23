<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelajar extends Model
{
    use SoftDeletes;

    protected $table = 'pelajar';

    protected $fillable = [
        'nama', 'jenis_kelamin', 'alamat', 'no_telepon','gambar', 'users_id', 'kelas_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

}
