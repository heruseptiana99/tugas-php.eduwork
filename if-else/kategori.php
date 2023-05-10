<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.php">TUGAS PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Operator
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="bangun_datar.php">Bangun Datar</a></li>
                            <li><a class="dropdown-item" href="bangun_ruang.php">Banngun Ruang</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="if-else/kategori.php">If-Else</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Switch Case</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Looping</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form method="GET" action="">
                            <div class="mb-3">
                                <h4>INPUT BMI</h4>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="tinggi" class="form-label">Tinggi Badan</label>
                                <input type="text" class="form-control" id="tinggi" name="tinggi_badan" placeholder="tinggi badan">
                            </div>
                            <div class="mb-3">
                                <label for="berat" class="form-label">Berat Badan</label>
                                <input type="text" class="form-control" id="berat" name="berat_badan" placeholder="berat badan">
                            </div>
                            <button type="submit" class="btn btn-primary">Cek BMI</button>
                            <a href="http://localhost/tugas-php.eduwork/if-else/kategori.php" class="btn btn-success">Refresh</a>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                    if($_GET){
                        $nama = $_GET["nama"];
                        $tinggi = $_GET["tinggi_badan"];
                        $berat = $_GET["berat_badan"];
                        $imt = $berat/(($tinggi/100)*2);
                        if($imt<18.5){
                            $hasil = "Kurus";
                        }elseif($imt>=18.5 AND $imt<=25.0){
                            $hasil = "Sedang";
                        }else{
                            $hasil = "Gemuk";
                        }                    
                    } 
                ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4>HASIL BMI</h4>
                            <?php 
                                if($_GET){
                                    ?>
                                    <p>Halo, <?= $nama ?>. Nilai BMI anda adalah <?= $nama ?>, anda termasuk <?= $hasil ?></p>
                            <?php
                                }else{
                                    echo "Nilai akan tampil...";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>