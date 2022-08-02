<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
       
        echo view("Admin/dassboard");
    }

    public function tambah(){
        return view("Admin/tambah_artikel");
    }
}
