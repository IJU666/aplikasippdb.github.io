<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumengambar extends Model
{
    use HasFactory;

    protected $table = 'dokumengambar';
    protected $primaryKey = "id";
    protected $fillable = [
        'id','pengguna','gambar1','gambar2','gambar3','gambar4'
    ];
    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }
}
