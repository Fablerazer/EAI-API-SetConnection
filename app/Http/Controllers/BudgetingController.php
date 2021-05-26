<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budgeting;

class BudgetingController extends Controller
{
    //
    public function index(){
        return Budgeting::all();
    }

    public function create(request $request){
        $budgeting = new Budgeting;
        $budgeting->nama_divisi = $request->nama_divisi;
        $budgeting->evaluasi_budget = $request->evaluasi_budget;
        $budgeting->quartal = $request->quartal;
        $budgeting->save();

        return "Data Berhasil Masuk";
    }

    public function update(request $request, $id){
        $nama_divisi = $request->nama_divisi;
        $evaluasi_budget = $request->evaluasi_budget;
        $quartal = $request->quartal;
        
        $budgeting = Budgeting::find($id);
        $budgeting->nama_divisi = $nama_divisi;
        $budgeting->evaluasi_budget = $evaluasi_budget;
        $budgeting->quartal = $quartal;
        $budgeting->save();

        return "Data Berhasil di Update";
    }

    public function delete($id){
        $budgeting = Budgeting::find($id);
        $budgeting->delete();

        return "Data Berhasil di Hapus";
    }
}
