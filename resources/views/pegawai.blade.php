<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>Data Pegawai</center>
   @foreach ($data as $val)
   @if($val['jabatan'] == "manager")
   @php $jab = 5000000; @endphp
      @elseif($val['jabatan'] == "sekretaris")
         @php $jab = 3500000; @endphp 
         @elseif ($val['jabatan'] == "staff")
         @php $jab = 2500000; @endphp
         @endif

         @if($val['jam_kerja'] > 250 )
         @php $bonus = 0.10 * $jab; @endphp
         @elseif ($val ['jam_kerja'] > 200)
         @php $bonus = 0.05 * $jab; @endphp 
         @else 
         @php $bonus = 0; @endphp 
         @endif

             @php $ppn = 0.025 * $jab; @endphp 
             @php $gaber = ($jab + $bonus) - $ppn; @endphp
             Nama              :{{$val['nama']}} <br>
             Agama             :{{$val['agama']}}<br>
             Jabatan           :{{$val['jabatan']}} <br>
             Jam Bekerja       :{{$val['jam_kerja']}} <br>
             Gaji              :{{$jab}} <br>
             Bonus             :{{$bonus}} <br>
             PPN               :{{$ppn}} <br>
             Gaji Bersih       :{{$gaber}} <br>
             <hr>
             @endforeach
</body>
</html>