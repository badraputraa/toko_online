<?php 
$conn=mysqli.connect("http://localhost/phpmyadmin/index.php?route=/sql&db=toko_blesed&table=pesanan&pos=0");
mysqli_query=($conn,"INSERT INTO pesanan(N0,Nama,Model,Jumlah) VALUES('$_post[no]','$_post[nama]','$_post[model]','$_post[ukuran],'$_post[jumlah]')");

?>

<!-- localhost","root","localhost","root","","Toko_Blessed -->