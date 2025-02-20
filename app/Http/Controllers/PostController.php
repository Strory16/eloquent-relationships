<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk kelas PostController, yang mengorganisir kode dalam aplikasi dan menghindari konflik nama.

use App\Models\Post; // Mengimpor model Post, yang digunakan untuk berinteraksi dengan tabel 'posts' di database.

class PostController extends Controller // Mendeklarasikan kelas PostController yang memperluas kelas Controller.
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