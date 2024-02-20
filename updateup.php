<?php 
    include"config.php";
    $id = $_POST['id'];
    $buku=$_POST["buku"];
    $nama=$_POST["nama"];
    $pinjam=$_POST["pinjam"];
    $tanggal=$_POST["tanggal"];

    $query="UPDATE tb_peminjaman SET buku='$buku', nama='$nama', pinjam='$pinjam', tanggal='$tanggal' WHERE id='$id'";

    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:main.php");
    }else{
        $query;
    }
?>