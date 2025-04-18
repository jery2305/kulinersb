<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home');

    //    $data = [
    //       'nama' => 'Jery Chandra',
    //          'pekerjaan' => 'Developer',
    //   ];

       //return view('home')->with($data);

        //$nama = "Jery";
        //$pekerjaan = "Mahasiswa";
        //return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
