<?php

// Mendefinisikan namespace untuk kelas ini, yang membantu dalam mengorganisir kode dan menghindari konflik nama
namespace App\Console;

// Mengimpor kelas Schedule dari Laravel untuk penjadwalan tugas
use Illuminate\Console\Scheduling\Schedule;

// Mengimpor kelas ConsoleKernel dari Laravel, yang merupakan kelas dasar untuk kernel konsol
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

// Mendefinisikan kelas Kernel yang mewarisi dari ConsoleKernel
class Kernel extends ConsoleKernel

{
    /**
 * Define the application's command schedule.
 *
 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
 * @return void
 */
protected function schedule(Schedule $schedule)
{
    // Menjadwalkan perintah 'inspire' untuk dijalankan setiap jam.
    // $schedule->command('inspire')->hourly();
}

/**
 * Register the commands for the application.
 *
 * @return void
 */
protected function commands()
{
    // Memuat semua perintah yang ada di direktori 'Commands'.
    $this->load(__DIR__.'/Commands');

    // Memuat rute-rute konsol yang didefinisikan dalam file 'console.php'.
    require base_path('routes/console.php');
}
}
