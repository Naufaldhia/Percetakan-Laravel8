<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;

class PengaturanController extends Controller
{
    // Melakukan Pemanggilan data di web.php
    public function index(){
        // Pemanggilan data Tabel pengaturan semuanya
        $data = Pengaturan::paginate(5);
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

    public function tampilkandata($id){
        $data = Pengaturan::find($id);
        //dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pengaturan::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success','Data Berhasil di Update');
    }

    public function delete($id){
        $data = Pengaturan::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success','Data Berhasil di Hapus');
    }
}
