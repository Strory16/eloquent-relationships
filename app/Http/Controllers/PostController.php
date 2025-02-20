<?php

// Mendefinisikan namespace untuk kelas PostController, yang mengorganisir kode dalam aplikasi dan menghindari konflik nama.
namespace App\Http\Controllers; 
// Mengimpor model Post, yang digunakan untuk berinteraksi dengan tabel 'posts' di database.
use App\Models\Post; 

// Mendeklarasikan kelas PostController yang memperluas kelas Controller.
class PostController extends Controller 
{    
    /**
     * index
     *
     * @return void
     */
    public function index() // Mendefinisikan metode index yang akan menangani permintaan untuk menampilkan semua posting.
    {
        // Mengambil semua posting dari model Post, diurutkan berdasarkan waktu terbaru.
        $posts = Post::latest()->get();

        // Mengirimkan data posting ke tampilan 'posts' menggunakan compact untuk membuat array dari variabel.
        return view('posts', compact('posts'));
    }
}