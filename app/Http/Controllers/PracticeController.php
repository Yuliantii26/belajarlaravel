<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = "Aku Cinta Bandung";
        return view('latihan',compact('a'));
    }

    public function pass1()
    {
        $data = [
            ['nama' => 'ucup','kelas' => 'RPL 2'],
            ['nama' => 'icip','kelas' => 'RPL 1'],
            ['nama' => 'ecep','kelas' => 'RPL 3'],
        ];
        return view('latihan1',['siswa' => $data]);
    }
     public function pass2()
     {
        $val= [
            ['nama' => 'yulianti', 'nip'=>'12345','jabatan'=> 'manager','agama'=>'islam',
            'jk'=>'perempuan','jam_kerja'=>250],
            ['nama' => 'vina', 'nip'=>'78910','jabatan'=> 'skretaris','agama'=>'islam',
            'jk'=>'perempuan','jam_kerja'=>175],
            ['nama' => 'hae', 'nip'=>'112318','jabatan'=> 'staff','agama'=>'hindu',
            'jk'=>'lakilaki','jam_kerja'=>150],
        ] ;
        return view('pegawai',['data' => $val]);
     }   
}
