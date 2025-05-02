<!DOCTYPE html>
<html>
<head>
    <title>Form cek out</title>
</head>
<body bgcolor="green">
<?php
    //Proses Penyelesaian Kondisi Kode Barang
    $kode = $_POST['kode'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $ukuran= $_POST['ukuran'];
    $jumbel = $_POST['jumbel'];

    // Start Percabangan IF else
    // while ($nama="") {
        
    // }  
    if ($kode=="TS001")
    {
        $model="My Chemical Romance";
        $size="S,M,L,XL";
        $harga=300000;
    }
    else if ($kode=="TS002")
    {
        $model="Gun Roses";
        $size="S,M,L,XL";
        $harga=400000; 
    }
    else if ($kode=="TS003")
    {
     $model="Nirvana";
     $size="S,M,L,XL";
     $harga=500000;  
    }
    else if ($kode="TS004")
    {
        $model="Queen";
        $size="S,M,L,XL";
        $harga=600000;
    }
    else if($kode="TS005")
    {
        $model="Avanged Sevenfold";
        $size="S,M,L,XL";
        $harga=25000;
    }
    else if($kode="TS006")
    {
        $model="The Beatles";
        $size="S,M,L,XL";
        $harga=6500000;
    }

// $x=0
// while ($x<=$jumbel) {
//     echo "jumlah beli $x " : $harga
//     $x++
// }

    //PEMANGGILAN TANGGAL
    $tanggal=date("d-M-Y");
    
    //Proses cetak
    echo"STRUK PEMBELIAN TOKO BLESEED YOUGHT<br>";
    echo"tanggal    : $tanggal<br>";
    echo"nama      : $nama<br>";
    echo"alamat    :$alamat<br>";
    echo"<hr><br>";
    echo"model T-TSHRITS:$model<br>";
    echo"ukuran:$ukuran<br>";
    // echo"harga :Rp.$harga <br>";
    echo"<hr><br>";

    //proses total bayar
    $tobay=$jumbel*$harga;

    // echo "Jumlah Beli         :$jumbel <br>";
    $x=1;
    while ($x<=$jumbel) {
        echo "jumlah $x =", "$harga <br>";
        $x++;
    }
    echo "Total Bayar         :Rp.$tobay<br>";
    echo "<hr><br>";
    
      echo "Jumlah Beli         :$jumbel <br>";

  echo "<div align=center><a href=beli.php>Tambah Data Penjualan</a></div>";

  
  
  
?>
</body>
</html>