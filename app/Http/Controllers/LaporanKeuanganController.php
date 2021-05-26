<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporanKeuangan;

class LaporanKeuanganController extends Controller
{
    //
    public function index(){
        return laporanKeuangan::all();
    }

    public function create(request $request){
        $budgeting = new laporanKeuangan;
        $budgeting->nama_divisi = $request->nama_divisi;
        $budgeting->total_pengeluaran = $request->total_pengeluaran;
        $budgeting->total_pemasukan = $request->total_pemasukan;
        $budgeting->quartal = $request->quartal;
        $budgeting->save();

        return "Data Berhasil Masuk";
    }

    public function update(request $request, $id){
        $nama_divisi = $request->nama_divisi;
        $total_pengeluaran = $request->total_pengeluaran;
        $total_pemasukan = $request->total_pemasukan;
        $quartal = $request->quartal;
        
        $budgeting = laporanKeuangan::find($id);
        $budgeting->nama_divisi = $nama_divisi;
        $budgeting->total_pengeluaran = $total_pengeluaran;
        $budgeting->total_pemasukan = $total_pemasukan;
        $budgeting->quartal = $quartal;
        $budgeting->save();

        return "Data Berhasil di Update";
    }

    public function delete($id){
        $budgeting = laporanKeuangan::find($id);
        $budgeting->delete();

        return "Data Berhasil di Hapus";
    }
}
