<?php 
include "config.php";
$query = "SELECT * FROM tb_peminjaman ";
$sql = mysqli_query($koneksi,$query);
$no = 0

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data peminjaman buku Perpustakaan</title>
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

  <div class="p-5 mt--3">
    <a href="tambahdata.php" class="btn btn-active btn-primary text-white">Tambah Peminjam <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"></path></svg></a>
</div>

  

<div class="m-3">
  <table class="table table-striped">
  <thead>
      <tr>
        <th></th>
        <th>Nama Buku</th>
        <th>Nama peminjam</th>
        <th>Tanggal Minjam</th>
        <th>Tanggal balikin</th>
        <th>Tombol Aksi</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <?php while($result=mysqli_fetch_assoc($sql)){?>
      <tr class="bg-base-200 text-lg">
        <th><?php echo ++ $no;?></th>
        <th><?php echo $result['buku']?></th>
        <td><?php echo $result['nama']?></td>
        <td><?php echo $result['pinjam']?></td>
        <td><?php echo $result['tanggal']?></td>
        <td>
        <a href="update.php?edit=<?php echo $result['id']; ?>" class="btn btn-primary text-white">Edit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path></svg></a>
          <a href="delet.php?delete=<?php echo $result['id'] ?>" class="btn btn-danger text-white" onclick="return confirm('Apakah anda ingin menghapus data santri tersebut?')">Hapus <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a>
        </td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>

  



</body>
</html>