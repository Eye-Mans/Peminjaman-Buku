<?php 
    include "config.php";
    $id=$_GET["edit"];
    $query = "SELECT *FROM tb_peminjaman WHERE id='$id'";
$sql = mysqli_query($koneksi,$query);
$result = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

 <!-- navbar -->
 <nav class="navbar bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 text-white fw-bold">Data peminjaman buku Perpustakaan</span>
  </div>
</nav>
  <!-- nav -->
    
    
<div class="m-3">
    <form action="updateup.php" method="post">
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama Buku</span>
        <input type="text" name="buku" value="<?php echo $result['buku']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <div class="input-group mb-3 ">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama Peminjam</span>
        <input type="text" name="nama" value="<?php echo $result['nama']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <div class="input-group mb-3 ">
        <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Minjam</span>
        <input type="date" name="pinjam" value="<?php echo $result['pinjam']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <div class="input-group mb-3 ">
        <span class="input-group-text" id="inputGroup-sizing-default">Tanggal balikin</span>
        <input type="date" name="tanggal" value="<?php echo $result['tanggal']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        <input type="hidden" name="id" value="<?php echo $result['id']?>" class="input input-ghost w-full max-w-xs">
    </div>

    <button type="submit" class="btn btn-active btn-success mt-3">Edit data</button>
    <a href="main.php" class="btn btn-active btn-danger mt-3">Cancel</a>
    </form>

    </div>
</div>
</body>
</html>