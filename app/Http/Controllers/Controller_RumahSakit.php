<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_RumahSakit extends Controller
{
    public function Index()
    {
        $data = DB::table(table: 'rumah_sakits')->get();
        return view('dashboard', compact('data'));
    }

    public function Create(Request $request)
    {
        $data = $request->all();
        // save
        $action = DB::table(table: 'rumah_sakits')->insert(
            [
                'nama_rs' => $data['nama_rs'],
                'alamat_rs' => $data['alamat_rs'],
                'deskripsi_rs' => $data['deskripsi_rs'],
                'no_tlpn_rs' => $data['no_tlpn_rs'],
            ]
        );
        if ($action != null) {
            print('data berhasil');
        } else {
            print('gagal');
        }
    }
}
