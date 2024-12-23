<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;

class PengaturanController extends Controller
{
    // Melakukan Pemanggilan data di web.php
    public function index(){
        // Pemanggilan data Tabel pengaturan semuanya
        $data = Pengaturan::all();
        // Pemanggilan views/datapegawai.blade.php
        // compact data
        // Foreach digunakan untuk banyak data
        return view ('datapegawai',compact('data'));
    }
    // Pemanggilan php.blade
    public function tambahkwitansi(){
        return view ('tambahdata');
    }
    // fungsi menambahkan data
    public function insertdata(Request $request){
        Pengaturan::create($request->all());
        return redirect()->route('dashboard')->with('success','Data Berhasil di Tambahkan');
    }
}
