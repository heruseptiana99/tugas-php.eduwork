
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTEK 2</title>
</head>
<body>
    <table border="1" cellpadding="3">
        <tr style="background-color: skyblue;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        
        <?php
        for ($i=1; $i <= 10 ; $i++) { 
            if($i%2==0){
                echo "<tr style='background-color: gainsboro;''>";
                }else{
                echo "<tr>";
                
            }
            echo "<td>". $i . "</td>";
            echo "<td> Nama ke ". $i . "</td>";
            echo "<td> Kelas ke ". 11-$i . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>
