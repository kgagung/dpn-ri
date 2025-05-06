<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\TitikBatalyon;
use Yajra\DataTables\Facades\DataTables;

class BatalyonController extends Controller
{
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = TitikBatalyon::select([
                'id',
                'WADMKK',
                'WADMPR',
                // 'Shape_Leng',
                // 'Pulau',
                // 'Luas_Ha',
                // 'Skor_Produ',
                // 'Kelas_Prod',
                // 'Ketahanan_',
                // 'Kelas_Kthn',
                // 'Luas_Sawit',
                // 'Skor_Sawit',
                // 'Kelas_Sawi',
                // 'Risiko_Ben',
                // 'Kelas_rsk_',
                // 'Rasio_LBS',
                // 'Kelas_Rso_',
                // 'Persentase',
                // 'Kelas_Prsn',
                // 'Persen_Pdd',
                // 'Kelas_pddk',
                // 'RPJMN_FE',
                // 'Kelas_RPJM',
                // 'Total_5',
                'Kelas_To_5',
                // 'Jumlah_Tit',
                // 'ORIG_FID',
                'X',
                'Y'
            ]);

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-warning btn-sm edit-btn" data-id="' . $row->id . '">Edit</button>
                        <button class="btn btn-sm btn-danger delete-btn" data-id="' . $row->id . '">Hapus</button>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.maps.batalyon-maps'); // Pastikan view-nya sesuai
    }

    public function store(Request $request)
    {
        $request->validate([
            'WADMKK' => 'required|string|max:255',
            'WADMPR' => 'required|string|max:255',
            // 'Shape_Leng' => 'required|numeric',
            // 'Pulau' => 'required|string|max:255',
            // 'Luas_Ha' => 'required|numeric',
            // 'Skor_Produ' => 'required|numeric',
            // 'Kelas_Prod' => 'required|string|max:255',
            // 'Ketahanan_' => 'required|numeric',
            // 'Kelas_Kthn' => 'required|string|max:255',
            // 'Luas_Sawit' => 'required|string|max:255',
            // 'Skor_Sawit' => 'required|numeric',
            // 'Kelas_Sawi' => 'required|string|max:255',
            // 'Risiko_Ben' => 'required|numeric',
            // 'Kelas_rsk_' => 'required|string|max:255',
            // 'Rasio_LBS' => 'required|numeric',
            // 'Kelas_Rso_' => 'required|string|max:255',
            // 'Persentase' => 'required|numeric',
            // 'Kelas_Prsn' => 'required|string|max:255',
            // 'Persen_Pdd' => 'required|numeric',
            // 'Kelas_pddk' => 'required|string|max:255',
            // 'RPJMN_FE' => 'required|numeric',
            // 'Kelas_RPJM' => 'required|string|max:255',
            // 'Total_5' => 'required|numeric',
            'Kelas_To_5' => 'required|string|max:255',
            // 'Jumlah_Tit' => 'required|numeric',
            // 'ORIG_FID' => 'required|numeric',
            'X' => 'required|numeric',
            'Y' => 'required|numeric'
        ]);

        $data = TitikBatalyon::create([
            'WADMKK' => $request->WADMKK,
            'WADMPR' => $request->WADMPR,
            // 'Shape_Leng' => $request->Shape_Leng,
            // 'Pulau' => $request->Pulau,
            // 'Luas_Ha' => $request->Luas_Ha,
            // 'Skor_Produ' => $request->Skor_Produ,
            // 'Kelas_Prod' => $request->Kelas_Prod,
            // 'Ketahanan_' => $request->Ketahanan_,
            // 'Kelas_Kthn' => $request->Kelas_Kthn,
            // 'Luas_Sawit' => $request->Luas_Sawit,
            // 'Skor_Sawit' => $request->Skor_Sawit,
            // 'Kelas_Sawi' => $request->Kelas_Sawi,
            // 'Risiko_Ben' => $request->Risiko_Ben,
            // 'Kelas_rsk_' => $request->Kelas_rsk_,
            // 'Rasio_LBS' => $request->Rasio_LBS,
            // 'Kelas_Rso_' => $request->Kelas_Rso_,
            // 'Persentase' => $request->Persentase,
            // 'Kelas_Prsn' => $request->Kelas_Prsn,
            // 'Persen_Pdd' => $request->Persen_Pdd,
            // 'Kelas_pddk' => $request->Kelas_pddk,
            // 'RPJMN_FE' => $request->RPJMN_FE,
            // 'Kelas_RPJM' => $request->Kelas_RPJM,
            // 'Total_5' => $request->Total_5,
            'Kelas_To_5' => $request->Kelas_To_5,
            // 'Jumlah_Tit' => $request->Jumlah_Tit,
            // 'ORIG_FID' => $request->ORIG_FID,
            'X' => $request->X,
            'Y' => $request->Y,
        ]);

        return response()->json(['success' => 'Data berhasil ditambahkan!', 'data' => $data]);
    }


    public function destroy($id)
    {
        $data = TitikBatalyon::select([
            'id',
            'WADMKK',
            'WADMPR',
            'Kelas_To_5',
            'X',
            'Y'
        ])->findOrFail($id);

        // Tidak ada file gambar yang perlu dihapus, jadi cukup hapus datanya
        $data->delete();

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    public function edit($id)
    {
        $data = TitikBatalyon::select([
            'id',
            'WADMKK',
            'WADMPR',
            'Kelas_To_5',
            'X',
            'Y'
        ])->findOrFail($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'WADMKK' => 'required|string|max:255',
            'WADMPR' => 'required|string|max:255',
            // 'Shape_Leng' => 'required|numeric',
            // 'Pulau' => 'required|string|max:255',
            // 'Luas_Ha' => 'required|numeric',
            // 'Skor_Produ' => 'required|numeric',
            // 'Kelas_Prod' => 'required|string|max:255',
            // 'Ketahanan_' => 'required|numeric',
            // 'Kelas_Kthn' => 'required|string|max:255',
            // 'Luas_Sawit' => 'required|string|max:255',
            // 'Skor_Sawit' => 'required|numeric',
            // 'Kelas_Sawi' => 'required|string|max:255',
            // 'Risiko_Ben' => 'required|numeric',
            // 'Kelas_rsk_' => 'required|string|max:255',
            // 'Rasio_LBS' => 'required|numeric',
            // 'Kelas_Rso_' => 'required|string|max:255',
            // 'Persentase' => 'required|numeric',
            // 'Kelas_Prsn' => 'required|string|max:255',
            // 'Persen_Pdd' => 'required|numeric',
            // 'Kelas_pddk' => 'required|string|max:255',
            // 'RPJMN_FE' => 'required|numeric',
            // 'Kelas_RPJM' => 'required|string|max:255',
            // 'Total_5' => 'required|numeric',
            'Kelas_To_5' => 'required|string|max:255',
            // 'Jumlah_Tit' => 'required|numeric',
            // 'ORIG_FID' => 'required|numeric',
            'X' => 'required|numeric',
            'Y' => 'required|numeric'
        ]);

        $data = TitikBatalyon::select([
            'id',
            'WADMKK',
            'WADMPR',
            'Kelas_To_5',
            'X',
            'Y'
        ])->findOrFail($id);

        $data->update([
            'WADMKK' => $request->WADMKK,
            'WADMPR' => $request->WADMPR,
            // 'Shape_Leng' => $request->Shape_Leng,
            // 'Pulau' => $request->Pulau,
            // 'Luas_Ha' => $request->Luas_Ha,
            // 'Skor_Produ' => $request->Skor_Produ,
            // 'Kelas_Prod' => $request->Kelas_Prod,
            // 'Ketahanan_' => $request->Ketahanan_,
            // 'Kelas_Kthn' => $request->Kelas_Kthn,
            // 'Luas_Sawit' => $request->Luas_Sawit,
            // 'Skor_Sawit' => $request->Skor_Sawit,
            // 'Kelas_Sawi' => $request->Kelas_Sawi,
            // 'Risiko_Ben' => $request->Risiko_Ben,
            // 'Kelas_rsk_' => $request->Kelas_rsk_,
            // 'Rasio_LBS' => $request->Rasio_LBS,
            // 'Kelas_Rso_' => $request->Kelas_Rso_,
            // 'Persentase' => $request->Persentase,
            // 'Kelas_Prsn' => $request->Kelas_Prsn,
            // 'Persen_Pdd' => $request->Persen_Pdd,
            // 'Kelas_pddk' => $request->Kelas_pddk,
            // 'RPJMN_FE' => $request->RPJMN_FE,
            // 'Kelas_RPJM' => $request->Kelas_RPJM,
            // 'Total_5' => $request->Total_5,
            'Kelas_To_5' => $request->Kelas_To_5,
            // 'Jumlah_Tit' => $request->Jumlah_Tit,
            // 'ORIG_FID' => $request->ORIG_FID,
            'X' => $request->X,
            'Y' => $request->Y,
        ]);

        return response()->json(['success' => 'Data berhasil diperbarui!']);
    }
}
