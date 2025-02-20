<?php

// Mendefinisikan namespace untuk kelas Handler, yang mengorganisir kode dalam aplikasi dan menghindari konflik nama.
namespace App\Exceptions; 

// Mengimpor kelas dasar ExceptionHandler dari Laravel, yang menyediakan fungsionalitas penanganan pengecualian.
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler; 

// Mengimpor interface Throwable, yang merupakan antarmuka dasar untuk semua pengecualian dan kesalahan di PHP.
use Throwable; 

// Mendeklarasikan kelas Handler yang memperluas kelas ExceptionHandler.
class Handler extends ExceptionHandler 

{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        // Daftar ini akan berisi jenis pengecualian dan tingkat log kustom yang sesuai.
        // Misalnya, Anda dapat menentukan bahwa pengecualian tertentu harus dicatat dengan tingkat log 'error' atau 'critical'.
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        // Daftar ini akan berisi jenis pengecualian yang tidak akan dilaporkan.
        // Misalnya, Anda mungkin ingin mengecualikan pengecualian tertentu dari pencatatan untuk menghindari kebisingan di log.
    ];

        /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password', // Input ini tidak akan disimpan dalam sesi ketika terjadi pengecualian validasi.
        'password',         // Input ini juga tidak akan disimpan dalam sesi untuk alasan keamanan.
        'password_confirmation', // Input konfirmasi password tidak akan disimpan dalam sesi.
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()

    {
        // Mendaftarkan callback untuk menangani pengecualian yang dapat dilaporkan.
        $this->reportable(function (Throwable $e) {
            // Di sini Anda dapat menambahkan logika untuk menangani pengecualian yang dilaporkan.
            // Misalnya, Anda dapat mencatat pengecualian atau mengirimnya ke layanan pemantauan.
        });
    }

}
