<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitikBatalyon extends Model
{
    use HasFactory;

    protected $table = 'titik_batalyon';

    protected $fillable = [
        'WADMKK',
        'WADMPR',
        'Kelas_To_5',
        'X',
        'Y'
    ];

    public $timestamps = false;
}
