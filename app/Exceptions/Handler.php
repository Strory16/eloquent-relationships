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
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
