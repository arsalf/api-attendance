<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_kelas', 'nama_kelas', 'prodi_kode'];

    public function prodi()
    {
        return $this->hasMany(Prodi::class, 'prodi_kode', 'kode_prodi');
    }
}
