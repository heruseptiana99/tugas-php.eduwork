<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                DAFTAR NILAI
            </a>
        </div>
    </nav>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table  class="table table-striped">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Tanggal Lahir</td>
                        <td>Umur</td>
                        <td>Alamat</td>
                        <td>Kelas</td>
                        <td>Nilai</td>
                        <td>Hasil</td>
                    </tr>
                    <?php 
                        $json_string = file_get_contents('data.json');
                        $json = json_decode($json_string, true);
            
                        $i= 1;
                        foreach($json as $data){
                            $birthDate = new \DateTime($data['tanggal_lahir']);
                            $today = new \DateTime("today");
                            $y = $today->diff($birthDate)->y;
            
                            if ($data['nilai'] >= 0 && $data['nilai'] <= 49) {
                                $grade = "E";
                            } else if ($data['nilai'] >= 50 && $data['nilai'] <= 59) {
                                $grade = "D";
                            } else if ($data['nilai'] >= 60 && $data['nilai'] <= 69) {
                                $grade = "C";
                            } else if ($data['nilai'] >= 70 && $data['nilai'] <= 79) {
                                $grade = "B";
                            } else {
                                $grade = "A";
                            } 
                    ?>
                        <tr>
                            <td><?= $i++ . "."; ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= date_format(date_create($data['tanggal_lahir']),"d F Y"); ?></td>
                            <td><?= $y . " Tahun" ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['kelas'] ?></td>
                            <td><?= $data['nilai'] ?></td>
                            <td><?= $grade ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
            <div class="col-2"></div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>