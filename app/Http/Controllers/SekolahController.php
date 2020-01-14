<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
   public function hallo()
   {
       return "hallo dunia";
   }

   public function dunia()
   {
       return "dunia";
   } 
   public function pagi()
   {
       return "selamat pagi";
   }
   public function hahaha ()
   {
       return "hehehe";
   }


   public function jeniskucing ($warna = null)
   {
       if(!$warna){
       // return "warna kucing kamu : " .$warna;
       return "warna belum dipilih ";
       }else{
        return "warna kucing kamu : " .$warna;
       }
    }

    public function warungnasi ($menu = null , $harga = null) {
        if (isset($menu)) {
            echo "Anda Membeli " .$menu;
        }if (isset($harga)) {
            if($harga >= 15000){
                echo "dengan ukuran Jumbo";
            }elseif ($harga < 15000 && $harga >= 7500) {
                echo " dengan ukuran Medium ";
            }elseif ($harga < 7500) {
                echo "dengan ukuran Small";
            }
        }if (!$menu) {
            echo "Anda belum memesan";
        }
    }

}
