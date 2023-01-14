<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ortu extends Model
{
    use HasFactory;

    protected $table = 'ortu';
    protected $primaryKey = "id";
    protected $fillable =[
        'id',
        'pengguna',
        'nik_ayah',
        'nama_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'hp_ayah',
        'nik_ibu',
        'nama_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'hp_ibu',
    ];
    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }
}