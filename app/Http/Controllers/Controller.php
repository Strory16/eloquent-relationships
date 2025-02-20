<?php

// Mendefinisikan namespace untuk kelas Controller, yang mengorganisir kode dalam aplikasi dan menghindari konflik nama.
namespace App\Http\Controllers; 

// Mengimpor trait AuthorizesRequests untuk menangani otorisasi dalam aplikasi.
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 
// Mengimpor trait DispatchesJobs untuk memudahkan pengiriman pekerjaan (jobs) ke antrian.
use Illuminate\Foundation\Bus\DispatchesJobs; 
// Mengimpor trait ValidatesRequests untuk menangani validasi permintaan (request).
use Illuminate\Foundation\Validation\ValidatesRequests;
// Mengimpor kelas dasar Controller dari Laravel dan memberinya alias BaseController. 
use Illuminate\Routing\Controller as BaseController; 

// Mendeklarasikan kelas Controller yang memperluas kelas dasar BaseController.
class Controller extends BaseController 

{
    // Menggunakan trait untuk menambahkan fungsionalitas otorisasi, pengiriman pekerjaan, dan validasi ke dalam Controller ini.
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}