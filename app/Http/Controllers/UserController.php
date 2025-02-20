<?php

// Mendefinisikan namespace untuk UserController, mengorganisir kode dalam aplikasi.
namespace App\Http\Controllers; 
// Mengimpor model User untuk berinteraksi dengan tabel 'users' di database.
use App\Models\User; 
// Mendeklarasikan kelas UserController yang memperluas kelas Controller.
class UserController extends Controller 
{    
    /**
     * index
     *
     * @return void
     */
    // Mendefinisikan metode index untuk menangani permintaan menampilkan semua pengguna.
    public function index() 
    {
        //get users form Model
        $users = User::latest()->get();

        //passing user to view
        return view('users', compact('users'));
    }
}