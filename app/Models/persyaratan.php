<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratan extends Model
{
    use HasFactory;

    protected $table = 'biaya';
    protected $primaryKey = "id";
    protected $fillable =[
        'id','pengguna','spp','seragam','bangunan'
    ];
    public function pengguna(){
        return $this->belongsTo(pengguna::class, 'pengguna', 'id');
    }
}
