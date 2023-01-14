<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuskeuangan extends Model
{
    use HasFactory;

    protected $table = 'Statuskeuangan';
    protected $orimaryKey = "id";
    protected $fillable = [
        'id','statuskeuangan'
    ];
}
