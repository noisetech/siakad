<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    use SoftDeletes;

    protected $table = 'guru';

    protected $fillable = [
        'nama', 'alamat', 'jenis_kelamin', 'no_telepon'
    ];

    public function mapel(){
        return $this->hasMany(Mapel::class, 'guru_id', 'id');
    }
}
