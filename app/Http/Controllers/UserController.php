<?php

// Mendefinisikan namespace untuk UserController, mengorganisir kode dalam aplikasi.
namespace App\Http\Controllers; 

use App\Models\User; // Mengimpor model User untuk berinteraksi dengan tabel 'users' di database.

class UserController extends Controller // Mendeklarasikan kelas UserController yang memperluas kelas Controller.
{    
    /**
     * index
     *
     * @return void
     */
    public function index() // Mendefinisikan metode index untuk menangani permintaan menampilkan semua pengguna.
    {
        //get users form Model
        $users = User::latest()->get();

        //passing user to view
        return view('users', compact('users'));
    }
}