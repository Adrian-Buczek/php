<?php



//w bazie danych:
//SELECT ROUND(AVG(temperatura), 2) AS Średnia_temperatura FROM pomiary WHERE id_miesiac = 7;
//INSERT INTO miejscowosc (id, nazwa, kraj) VALUES (11, Cyców, Polska);
//SELECT m.nazwa, m.kraj, p.temperatura FROM miejscowosc m INNER JOIN pomiary p ON p.id_miejscowosc = m.id WHERE p.id_miesiac = 7;
//SELECT m.nazwa, AVG(p.temperatura)  FROM miesiace m INNER JOIN pomiary p ON p.id_miesiac = m.id;


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Temperatura w Lipcu</h1>
    <table>
        <tr>
            <th>Miasto</th>
            <th>Kraj</th>
            <th>Temperatura</th>
            <th>Pogoda</th>
        </tr>
       <tr>
        <?php

$host = "localhost";
$uzytkownik = "root";
$haslo = "";
$nazwaBazy = "pogoda";
$conn = mysqli_connect($host, $uzytkownik, $haslo, $nazwaBazy);
mysqli_set_charset($conn, "utf8");

        $sql = "SELECT m.nazwa, m.kraj, p.temperatura, ROUND(AVG(p.temperatura), 2) FROM miejscowosc m INNER JOIN pomiary p ON p.id_miejscowosc = m.id GROUP BY m.nazwa;";

        $danepogody = mysqli_query($conn, $sql);

        if(mysqli_num_rows($danepogody) > 0){


        while ($dane = mysqli_fetch_array($danepogody)){
            echo "<tr>";
            echo "<td>" . $dane["nazwa"] . "</td>";
            echo "<td>" . $dane["kraj"] . "</td>";
            echo "<td>" . $dane["temperatura"] . "</td>";
            if ($dane["temperatura"] > 30){
                echo "<td>Słonecznie</yd>";
            }elseif($dane["temperatura"] < 26){
                echo "<td>Deszczowo</td>";
            }else{
                echo "<td>pochmurno</td>";
            };

            echo "</tr>";
        };
        };

      

        ?>
       </tr>
    </table>
   <hr>
   <h2>Średnie temperatury w roku:</h2>

  
   <a href="index.php">Styczeń</a>
   <a href="index.php">Luty</a>
   <a href="index.php">Marzec</a>
   <a href="index.php">Kwiecień</a>
   <a href="index.php">Maj</a>
   <a href="index.php">Czerwiec</a>
   <a href="index.php">Lipiec</a>
   <a href="index.php">Sierpień</a>
   <a href="index.php">Wrzesień</a>
   <a href="index.php">Październik</a>
   <a href="index.php">Listopad</a>
   <a href="index.php">Grudzień</a>
   <h3>Średnia temperatura dla wybranego miesiąca wynosi:</h3>
   <?php
   $sql2 = "SELECT ROUND(AVG(temperatura), 2) FROM pomiary WHERE id_miesiac = 7;";


   mysqli_close($conn);
   ?>
</body>
    
</html>








