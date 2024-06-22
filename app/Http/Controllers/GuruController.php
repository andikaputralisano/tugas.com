<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru; // Mengimpor model Guru dengan namespace yang benar
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        // Menggunakan Eloquent untuk mendapatkan data guru
        $guru = Guru::all();
        return view('guru', ['guru' => $guru]);
    }

    public function delete($id)
    {
        // Menggunakan Eloquent untuk menemukan dan menghapus data guru
        $guru = Guru::find($id);
        
        if ($guru) {
            $guru->delete();
        }

        return redirect('/guru');
    }

    public function trash(){
         // mengampil data guru yang sudah dihapus
     $guru = Guru::onlyTrashed()->get();
     return view('guru_tras', ['guru' => $guru]);
    }

// restore data guru yang dihapus
public function kembalikan($id)
     {
     $guru = Guru::onlyTrashed()->where('id',$id);
     $guru->restore();
     return redirect('/guru/trash');
     }

public function kembalikan_semua()
{
    
     $guru = Guru::onlyTrashed();
     $guru->restore();
 
     return redirect('/guru/trash');
}

public function hapus_permanen($id)
{
     // hapus permanen data guru
     $guru = Guru::onlyTrashed()->where('id',$id);
     $guru->forceDelete();
 
     return redirect('/guru/trash');
}

public function hapus_permanen_semua()
{
     // hapus permanen semua data guru yang sudah dihapus
     $guru = Guru::onlyTrashed();
     $guru->forceDelete();
 
     return redirect('/guru/trash');
}
}
