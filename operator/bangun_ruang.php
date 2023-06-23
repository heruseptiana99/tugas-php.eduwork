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
                <div class="col-6 mt-2">
                    <?php 
                        if (isset($_GET['volume_kubus'])) {
                            $sisi = $_GET['sisi'];
                            $hasil = $sisi * $sisi * $sisi;
                            echo '<script type ="text/JavaScript">';  
                            echo 'alert("Hasil dari Volume Kubus adalah ' . $hasil . '")';  
                            echo '</script>';  
                        }
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <form method="GET" action="">
                            <div class="mb-3">
                                <h4>1. VOLUME KUBUS</h4>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Rumus</label>
                                <br>
                                <label for="nama" class="form-label">V = r x r x r</label>
                            </div>
                            <div class="mb-3">
                                <label for="sisi" class="form-label">Sisi</label>
                                <input type="text" class="form-control" id="sisi" name="sisi" placeholder="sisi">
                                <input type="hidden" class="form-control" id="sisi" name="volume_kubus" placeholder="sisi" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary">Cek Nilai</button>
                            <a href="http://localhost:8080/tugas-php.eduwork/if-else/kategori.php" class="btn btn-success">Refresh</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <?php 
                        if (isset($_GET['volume_balok'])) {
                            $panjang = $_GET['panjang'];
                            $lebar = $_GET['lebar'];
                            $tinggi = $_GET['tinggi'];
                            $hasil = $panjang * $lebar * $tinggi;
                            echo '<script type ="text/JavaScript">';  
                            echo 'alert("Hasil dari Volume Balok adalah ' . $hasil . '")';  
                            echo '</script>';  
                        }
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <form method="GET" action="">
                            <div class="mb-3">
                                <h4>2. VOLUME BALOK</h4>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Rumus</label>
                                <input type="hidden" class="form-control" id="sisi" name="volume_balok" placeholder="sisi" value="1">
                                <br>
                                <label for="nama" class="form-label">V = p x l x t</label>
                            </div>
                            <div class="mb-3">
                                <label for="panjang" class="form-label">Panjang</label>
                                <input type="text" class="form-control" id="panjang" name="panjang" placeholder="panjang">
                            </div>
                            <div class="mb-3">
                                <label for="lebar" class="form-label">Lebar</label>
                                <input type="text" class="form-control" id="lebar" name="lebar" placeholder="lebar">
                            </div>
                            <div class="mb-3">
                                <label for="tinggi" class="form-label">Tinggi</label>
                                <input type="text" class="form-control" id="tinggi" name="tinggi" placeholder="tinggi">
                            </div>
                            <button type="submit" class="btn btn-primary">Cek Nilai</button>
                            <a href="http://localhost:8080/tugas-php.eduwork/if-else/kategori.php" class="btn btn-success">Refresh</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <?php 
                        if (isset($_GET['volume_bola'])) {
                            $sisi = $_GET['sisi'];
                            $hasil = 1.33333333333 * 3.14 * $sisi;
                            echo '<script type ="text/JavaScript">';  
                            echo 'alert("Hasil dari Volume Balok adalah ' . $hasil . '")';  
                            echo '</script>';  
                        }
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <form method="GET" action="">
                            <div class="mb-3">
                                <h4>3. VOLUME BOLA</h4>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Rumus</label>
                                <input type="hidden" class="form-control" id="sisi" name="volume_bola" placeholder="sisi" value="1">
                                <br>
                                <label for="nama" class="form-label">V = 4/3 x 3.14 x sisi</label>
                            </div>
                            <div class="mb-3">
                                <label for="sisi" class="form-label">Sisi</label>
                                <input type="text" class="form-control" id="sisi" name="sisi" placeholder="sisi">
                            </div>
                            <button type="submit" class="btn btn-primary">Cek Nilai</button>
                            <a href="http://localhost:8080/tugas-php.eduwork/if-else/kategori.php" class="btn btn-success">Refresh</a>
                            </form>
                        </div>
                    </div>
                </div>


             
                
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>