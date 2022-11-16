<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'kode_mata_kuliah';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_mata_kuliah', 'nama_mata_kuliah',
    ];

    public function dosen_mengajar()
    {
        return $this->hasMany(DosenMengajar::class, 'mata_kuliah_kode', 'kode_mata_kuliah');
    }
}
