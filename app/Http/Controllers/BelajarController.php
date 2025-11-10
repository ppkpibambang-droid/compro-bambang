<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return "Hello dari BelajarController index";
    }
    public function create()
    {
        return view('create');
    }
    
    public function tambah()
    {
        return view('tambah');
    }
    
    public function kurang()
    {
        return view('kurang');
    }
    
    public function kali()
    {
        return view('kali');
    }
    
    public function bagi()
    {
        return view('bagi');
    }
    
    public function tambahAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
    }
    public function kurangAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 - $angka2;
        return view('kurang', compact('jumlah'));
    }

    public function kaliAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 * $angka2;
        return view('kali', compact('jumlah'));
    }

    public function bagiAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 / $angka2;
        return view('bagi', compact('jumlah'));
    }


}

