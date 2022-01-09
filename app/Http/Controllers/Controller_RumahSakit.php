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
        if ($action) {
            return redirect()->back()->with(['success' => 'success']);
        } else {
            return 'Insert gagal';
        }
    }

    public function FetchID($id)
    {
        $getPerID = DB::table('rumah_sakits')->where('id', $id)->first();
        // handel
        $data = DB::table(table: 'rumah_sakits')->get();

        return view('dashboard', compact('data', 'getPerID'));
    }

    public function Update(Request $request, $id)
    {
        $data = $request->all();
        $action = DB::table('rumah_sakits')->where('id', $id)->update(
            [
                'nama_rs' => $data['nama_rs'],
                'alamat_rs' => $data['alamat_rs'],
                'deskripsi_rs' => $data['deskripsi_rs'],
                'no_tlpn_rs' => $data['no_tlpn_rs'],
            ]
        );

        if ($action) {
            return redirect()->back()->with(['success' => 'Berhasil Edit Data']);
        } else {
            return 'Insert gagal';
        }
    }


    public function Delete($id)
    {
        $delete = DB::table('rumah_sakits')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with(['success' => 'Berhasil delete']);
        } else {
            return 'Insert gagal';
        }
    }
}
