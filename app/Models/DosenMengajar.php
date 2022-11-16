<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenMengajar extends Model
{
    use HasFactory;
    protected $table = 'dosen_mengajar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dosen_id',
        'mata_kuliah_kode',
    ];

    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'dosen_id', 'id');
    }

    public function mata_kuliah()
    {
        return $this->hasMany(MataKuliah::class, 'mata_kuliah_kode', 'kode_mata_kuliah');
    }
}
