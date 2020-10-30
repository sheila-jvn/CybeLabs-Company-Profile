<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function showHome()
    {
        return view('admin.home');
    }

    public function showTentang()
    {
        return view('admin.tentang');
    }

    public function showBerita()
    {
        return view('admin.berita');
    }

    public function showGaleri()
    {
        return view('admin.galeri');
    }

    public function showKontak()
    {
        return view('admin.kontak');
    }
}
