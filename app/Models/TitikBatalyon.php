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
        'Shape_Leng',
        'Pulau',
        'Luas_Ha',
        'Skor_Produ',
        'Kelas_Prod',
        'Ketahanan_',
        'Kelas_Kthn',
        'Luas_Sawit',
        'Skor_Sawit',
        'Kelas_Sawi',
        'Risiko_Ben',
        'Kelas_rsk_',
        'Rasio_LBS',
        'Kelas_Rso_',
        'Persentase',
        'Kelas_Prsn',
        'Persen_Pdd',
        'Kelas_pddk',
        'RPJMN_FE',
        'Kelas_RPJM',
        'Total_5',
        'Kelas_To_5',
        'Jumlah_Tit',
        'ORIG_FID',
        'X',
        'Y'
    ];
}
