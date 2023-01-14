<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asalsekolah extends Model
{
    use HasFactory;

    protected $table = 'asalsekolah';
    protected $primaryKey = "id";
    protected $fillable =[
        'id','pengguna','npsn','nama_sekolah','hobi','nomor_ijazah','alamat_sekolah','provinsi','kota',
        'kecamatan','desa'
    ];
    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }
}
