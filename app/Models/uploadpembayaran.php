<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadpembayaran extends Model
{
    use HasFactory;

    protected $table = 'uploadpembayaran';
    protected $orimaryKey = "id";
    protected $fillable = [
        'id','pengguna','biodatasiswa','ttgpembayaran','jampembayaran','image'
    ];

    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }

    public function biodatasiswa(){
        return $this->belongsTo(Biodatasiswa::class, 'biodatasiswa', 'id');
    }
}
