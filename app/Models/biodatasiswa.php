<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodatasiswa extends Model
{
    use HasFactory;

    protected $table = 'biodatasiswa';
    protected $primaryKey = "id";
    protected $fillable =[
        'id','pengguna','nisn','nama','tempat_lahir','ttg','jk','agama','hp','alamat','provinsi','kota',
        'kecamatan','desa','status','keterangan'
    ];

    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }

    public function bayar(){
        return $this->hasOne(uploadpembayaran::class, 'biodatasiswa', 'id');
    }
}
