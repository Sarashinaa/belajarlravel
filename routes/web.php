<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home', ['nama' => 'Ananta Galih Mahardika']);
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/result', function () {
    // Ambil data dari form
    $data = [
        'nama' => request('nama'),
        'nim' => request('nim'),
        'kesan' => request('kesan'),
        'pesan' => request('pesan'),
        'tanggal' => date('d M Y, H:i')
    ];
    
    // Ambil data submissions yang sudah ada dari session
    $submissions = session('submissions', []);
    
    // Tambahkan data baru di awal array
    array_unshift($submissions, $data);
    
    // Simpan kembali ke session
    session(['submissions' => $submissions]);
    
    return redirect('/result');
});

Route::get('/result', function () {
    return view('result');
});