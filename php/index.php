<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PHP</title>
</head>
<body>
    <!-- ini jawaban soal 1 di soal PHP -->
    <?php 
        $kelipatan = 1;
        for ($i=1; $i <= 10; $i++) { 
            echo $kelipatan . "x" . $i . "=" . $i;
            echo "<br>";
        }
    ?>
    <br><br><br>
    <!-- ini jawaban soal 2 di soal PHP -->
    <?php
        for ($j=10; $j >= 0; $j--) { 
            for ($l=0; $l < $j; $l++) { 
               echo "*";
            }
            echo "<br>";
        }
    ?>
    <!-- ini jawaban soal 3 di soal PHP -->
    <?php 
        for ($a=0; $a < 10; $a++) { 
            for ($b=0; $b < $a; $b++) { 
                echo $b;
            }
            echo "<br>";
        }
    ?>
    <br>
</body>
</html>