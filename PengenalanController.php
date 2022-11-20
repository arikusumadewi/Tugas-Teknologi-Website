<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    //
    public function index(){
        $a = $_GET['a'];
        $b = $_GET['b']; 
        $operasi = $_GET['operasi'];

        echo "nilai a = $a<br>";
        echo "nilai b = $b<br><br>";

        if ($operasi=="tambah"){
            $c = $a + $b; 
            echo "penjumlahan $a + $b = $c";
        }

        elseif ($operasi=="Modulus"){
            $c = $a % $b; 
            echo "modulus $a % $b = $c";
        }

        elseif ($operasi=="kali"){
            $c = $a * $b; 
            echo "perkalian $a * $b = $c";
        }
        return view('aritmatika');
    
    }
}
