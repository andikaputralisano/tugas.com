<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $nama = "Haddad Alwi";
        $pelajaran = ["Framework","DPW","PBO"];
        return view('biodata', compact('nama','pelajaran'));
    }
}
