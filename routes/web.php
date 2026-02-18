<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Praktikan;

Route::get('/', function () {
    return view('form');
});

Route::get('/data-praktikan', function () {
    $data = \App\Models\Praktikan::all();
    return view('data', compact('data'));
});

Route::post('/simpan', function (Request $request) {

    $request->validate([
        'nama' => 'required',
        'npm' => 'required',
        'file_pdf' => 'required|mimes:pdf'
    ]);

    $file = $request->file('file_pdf');
    $path = $file->store('pdf', 'public');

    Praktikan::create([
        'nama' => $request->nama,
        'npm' => $request->npm,
        'file_pdf' => $path
    ]);

    return "Data berhasil disimpan.";
});
