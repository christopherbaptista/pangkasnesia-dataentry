<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    public function data() 
    {
        $layanan = DB::table('layanan')->get();

        // return $layanan;
        // return view('layanan.data', ['layanan' => $layanan]);
        return view('layanan.data', compact('layanan'));
    }

    public function add()
    {
        return view('layanan.add');
    }

    public function addProcess(Request $request) 
    {
        DB::table('layanan')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('layanan')->with('status', 'Data berhasil ditambahkan!');
    }
}
