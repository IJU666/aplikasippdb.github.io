<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class minatjurusan extends Model
{
    use HasFactory;

    protected $table = "minatjurusan";
    protected $primarykey = "id";
    protected $fillable =[
        'id','pengguna','jurusan','hobi','radio1','radio2','ketahui','kemampuan'
    ];

    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }
}
