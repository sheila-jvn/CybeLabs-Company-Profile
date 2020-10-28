<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view('index');
    }

    public function contoh () {
        return view('contoh');
    }

    public function contohPost(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nama = 'Sheila';
   
        $siswa->save();
    }
}
