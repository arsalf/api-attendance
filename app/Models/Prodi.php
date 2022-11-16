<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Prodi extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    protected $table = 'prodi';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kode_prodi', 'nama_prodi', 'jurusan_kode',
    ];

    public $timestamps = false;

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'jurusan_kode', 'kode_jurusan');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'prodi_kode', 'kode_prodi');
    }
}
