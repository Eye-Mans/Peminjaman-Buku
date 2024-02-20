<?php 
include "config.php";

$buku=$_POST["buku"];
$nama=$_POST["nama"];
$pinjam=$_POST["pinjam"];
$tanggal=$_POST["tanggal"];

$query ="INSERT INTO tb_peminjaman VALUES(null,'$buku','$nama','$pinjam','$tanggal')";
$sql = mysqli_query($koneksi,$query);
if($sql){
    header("location:main.php");
}else{
    $query;
}

?>