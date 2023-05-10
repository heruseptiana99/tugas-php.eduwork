<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP - Koneksi Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Latihan PHP - Kelompok 7</a>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <h3 class="mt-4 text-center">DATA ANGGOTA PERPUSTAKAAN</h3>
                <?php 
                  if($_GET){
                    if ($_GET['berhasil']==1) {
                     
                    
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Berhasil menambahkan data baru anggota! 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }
                  }
                ?>
                <a href="tambah.php" class="btn btn-primary mt-3 mb-3">Tambah Anggota</a>
                <table class="table table-striped">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Jenis Kelamin</th>
                          <th scope="col">Telepon</th>
                          <th scope="col">Email</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                        include('koneksi.php');
                        $data_anggota = mysqli_query($conn, "SELECT nama, sex, telp, alamat, email FROM anggota");
                        $i=1;
                        while($anggota = mysqli_fetch_array($data_anggota)) {
                    ?>
                      <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $anggota['nama'] ?></td>
                          <td><?= $anggota['sex'] ?></td>
                          <td><?= $anggota['telp'] ?></td>
                          <td><?= $anggota['email'] ?></td>
                          <td width="250px"><?= $anggota['alamat'] ?></td>
                          <td>
                            <a href="" class="btn btn-success">Ubah</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                    <?php
                        }
                    ?>
                  </tbody>
                </table>  
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>