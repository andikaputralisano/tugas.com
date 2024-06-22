<?php

namespace App\Http\Controllers;

use App\Models\Pegawai2;
use Illuminate\Http\Request;

class Pegawai2Controller extends Controller
{
    public function index(){
        $pegawai = Pegawai2::all();

        return view('pegawai2',['pegawai2'=> $pegawai]);
    }

    public function tambah()
    {
 
    // memanggil view tambah
    return view('tambah2');
 
    }

    public function store(Request $request)
    {
     $this->validate($request,[
    'nama' => 'required',
     'alamat' => 'required'
     ]);
 
        Pegawai2::create([
     'nama' => $request->nama,
     'alamat' => $request->alamat
     ]);
 
     return redirect('/pegawai2');
    }

    public function edit($id)
{
   $pegawai = Pegawai2::find($id);
   return view('edit2', ['pegawai' => $pegawai]);
}

public function update($id, Request $request)
{
    $this->validate($request,[
   'nama' => 'required',
   'alamat' => 'required'
    ]);
 
    $pegawai = Pegawai2::find($id);
    $pegawai->nama = $request->nama;
    $pegawai->alamat = $request->alamat;
    $pegawai->save();
    return redirect('/pegawai2');
}

public function delete($id)
{
    $pegawai = Pegawai2::find($id);
    $pegawai->delete();
    return redirect('/pegawai2');
}
}
