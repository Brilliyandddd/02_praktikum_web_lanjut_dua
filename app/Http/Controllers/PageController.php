<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang!";
    }

    public function about(){
        echo "Brilliyand Noval Herdana Putra <br>";
        echo "2141720104";
    }

    public function articles($id){
        echo "Halaman Artikel dengan id " . $id;
    }
}
