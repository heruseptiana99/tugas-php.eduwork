<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP - Tambah Data</title>
    

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <?php
  include ('koneksi.php');
  $id_anggota = $_GET['id_anggota'];

  $data_anggota = mysqli_query($conn, "SELECT id_anggota, nama, sex, telp, alamat, email FROM anggota where id_anggota='$id_anggota'");
  while ($anggota = mysqli_fetch_array($data_anggota)) {
    $nama = $anggota['nama'];
    $sex = $anggota['sex'];
    $telp = $anggota['telp'];
    $email = $anggota['email'];
    $alamat = $anggota['alamat'];
  }
  ?>
  <body>
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Latihan PHP - Kelompok 7</a>
    </div>
    </nav>
    <div class="container mb-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <a href="index.php" class="btn btn-primary mb-3"> << kembali</a>
                <div class="card">
                    <div class="card-body">
                        <form action="proses_edit.php?id_anggota=<?=$id_anggota;?>" method="POST" id="form-pelanggan">
                        <h3 class="mb-3">Ubah Anggota</h3>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $nama; ?>">
                            <small id="text-error-name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Jenis Kelamin</label>
                            <select name="sex" class="form-select" aria-label="Default select example">
                                <option value="P" <?php if($sex=="P"){ echo"selected";} ?>>Perempuan</option>
                                <option value="L" <?php if($sex=="L"){ echo"selected";} ?>>Laki-laki</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">Telepon</label>
                            <input type="number" class="form-control" name="telp" id="telp" placeholder="Telepon" value="<?= $telp ?>">
                            <small id="text-error-telp"></small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email@gmail.com" value="<?= $email ?>">
                            <small id="text-error-email"></small>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3"><?= $alamat ?></textarea>
                            <small id="text-error-alamat"></small>
                        </div>
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-primary">Ubah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#nama').val().length == 0 || $('#telp').val().length == 0 || $('#email').val().length == 0  || $('#alamat').val().length == 0 ) {
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-name').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-name').css({"font-style" : "italic"});
                $('#text-error-name').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-name').hide();
            }
            if($('#telp').val().length == 0){
                $('#telp').css({"border-color" : "red"});
                $('#text-error-telp').text('* Silahkan isi telpon terlebih dahulu');
                $('#text-error-telp').css({"font-style" : "italic"});
                $('#text-error-telp').css({"color" : "red"});
            }else{
                $('#telp').css({"border-color" : "#dee2e6"});
                $('#text-error-telp').hide();
            }
            if($('#email').val().length == 0){
                $('#email').css({"border-color" : "red"});
                $('#text-error-email').text('* Silahkan isi email terlebih dahulu');
                $('#text-error-email').css({"font-style" : "italic"});
                $('#text-error-email').css({"color" : "red"});
            }else{
                $('#email').css({"border-color" : "#dee2e6"});
                $('#text-error-email').hide();
            }
            if($('#alamat').val().length == 0){
                $('#alamat').css({"border-color" : "red"});
                $('#text-error-alamat').text('* Silahkan isi alamat terlebih dahulu');
                $('#text-error-alamat').css({"font-style" : "italic"});
                $('#text-error-alamat').css({"color" : "red"});
            }else{
                $('#alamat').css({"border-color" : "#dee2e6"});
                $('#text-error-alamat').hide();
            }
        } else {
            $('#form-pelanggan').submit();
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>