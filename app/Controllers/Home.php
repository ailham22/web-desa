<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function profil()
    {
        return view('profil');
    }
    public function berita()
    {
        return view('berita');
    }
    public function detailBerita(){
        return view('detailBerita');
    }
}
