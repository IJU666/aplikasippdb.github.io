<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    use HasFactory;

    protected $table = 'wali';
    protected $primaryKey = "id";
    protected $fillable =[
        'id','pengguna','nik_wali','nama_wali','tanggal_lahir_wali','pendidikan_wali','pekerjaan_wali','hp_wali'
    ];
    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }
}
