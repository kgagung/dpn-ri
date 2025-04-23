<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\TitikBatalyon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/titik-batalyon', function () {
    return TitikBatalyon::select('WADMKK', 'Kelas_Prod', 'X', 'Y')
        ->get()
        ->map(function ($item) {
            return [
                'WADMKK' => $item->WADMKK,
                'Kelas_Prod' => $item->Kelas_Prod,
                'loc' => [$item->X, $item->Y],
            ];
        });
});
