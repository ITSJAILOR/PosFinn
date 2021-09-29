<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembukuanController extends Controller
{
    public function index(){
        return view('BukuBesar');
    }
    
    public function akun()
    {
        return view('Akun');
    }
}
