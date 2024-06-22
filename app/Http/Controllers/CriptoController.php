<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CriptoController extends Controller
{
    public function enkripsi(Request $request)
    {
        $encrypted = Crypt::encryptString($request->text);
        $decrypted = Crypt::decryptString($encrypted);

        return view('enkripsi', [
            'encrypted' => $encrypted,
            'decrypted' => $decrypted
        ]);
    }

    public function data()
    {
        $parameter = [
            'nama' => 'Haddad',
            'pekerjaan' => 'Programmer',
        ];
        $encrypted = Crypt::encrypt($parameter);
        $link = "<a href='/data/".$encrypted."'>Klik</a>";

        return view('data', ['encrypted' => $encrypted, 'link' => $link]);
    }

    public function data_proses($data)
    {
        $decrypted = Crypt::decrypt($data);

        return view('data_proses', [
            'nama' => $decrypted['nama'],
            'pekerjaan' => $decrypted['pekerjaan']
        ]);
    }
}
