<?php

use Illuminate\Database\Seeder;

class PostPenggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            ['nama'=>'Yulianti', 'jabatan'=>'Direktur', 'jk'=>'Laki-laki', 'alamat'=>'Dago', 'agama'=>'Islam', 'total_gaji'=>'25jt'],
            ['nama'=>'vina', 'jabatan'=>'Karyawan', 'jk'=>'Laki-laki', 'alamat'=>'Bandung', 'agama'=>'Atheis', 'total_gaji'=>'5jt'],
            ['nama'=>'anya', 'jabatan'=>'Staff', 'jk'=>'Laki-laki', 'alamat'=>'Rancamanyar', 'agama'=>'Kristen', 'total_gaji'=>'7jt'],
            ['nama'=>'vina', 'jabatan'=>'Personalia', 'jk'=>'Laki-laki', 'alamat'=>'Kota Baru', 'agama'=>'Khatolik', 'total_gaji'=>'6jt'],
            ['nama'=>'Dewi', 'jabatan'=>'Keuangan', 'jk'=>'Perempuan', 'alamat'=>'Kopo', 'agama'=>'Islam', 'total_gaji'=>'5jt']
        ];
        DB::table('penggajihans')->insert($posts);

    }
}
