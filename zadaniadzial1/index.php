<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Adrian";
    $age = 103;
    $country = "Poland";

    echo "<p>Nazywam sie $name, mam $age lat i mieszkam w $country</p>";

    $a = 8;
    $b = 5;
    $wynik = $a * $b;
    echo "<p>Pole = $wynik</p>";


    $zmienna = 10;
    $zmienna += 1;
    echo "<p>wynik=$zmienna</p>";

    $isMember = false;
    var_dump($isMember);

    $l = 10;
    $k = 5;
    $suma = $l + $k;
    $roznica = $l - $k;
    $iloczyn = $l / $k;
    $iloraz = $l * $k;
    echo "<p>Suma = $suma | roznica = $roznica | iloczyn = $iloczyn | iloraz = $iloraz</p>";

    echo "<hr>";
    
    $wiek = 17;
    if($wiek >= 18) {
        echo "Może głosować!";
    } else{
        echo"Nie może głosować!";
    };

    $temperature = 22;
    if($temperature < 0){
        echo"<p>Temperatura minusowa!</p>";
    } elseif ($temperature > 0){
        echo"<p>Temperatura plusowa</p>";
    }elseif($temperature === 0){
        echo"<p>temperatura zerowa</p>";
    };

    $color = "czerwony";
    switch ($color) {
        case "czerwony":
            echo "<p style='color: red;'>czerwony</p>";
            break;
        case "zielony":
            echo "zielony";
            break;
        case "niebieski":
            echo "niebieski";
            break;
        default:
            echo "inny kolor";

    }

    $grade = 40;
    if($grade >= 50){
        echo"<p>Zdany!</p>";
    } else{
        echo"<p>Niezdany!</p>";
    };

    $username;
    if(isset($username)){
        echo "<p>Ma wartość</p>";
    } else{
        $username = "guest";
        echo "<p>wartość = $username</p>";
    };

    echo"<hr>";

    for ($i = 1; $i <= 10; $i++){
        echo $i . " ";
    };

    echo"<hr>";

    $numerek = 2;
    $suma = 0;
    while($numerek <= 20 && $numerek >= 2) {
        //echo $numerek . " ";
        if($numerek % 2 == 0){
            echo $numerek;
            $suma += $numerek;
        }
        $numerek++;
    } 
    echo "<p>$suma</p>";

    $imiona = ["kamil", "dawid", "michał", "bartek", "jakub"];
    foreach ($imiona as $imionka){
        echo $imionka . "\n";
    };
    $wykonanie = 1;
    do {
        echo "Komunikat" .$wykonanie. "<br>";
        $wykonanie++;
    } while ($wykonanie <= 3);

    $sumka = 0;
    for($cyferki = 1; $cyferki <= 100; $cyferki++) {
        $sumka += $cyferki;
    }
    echo "suma 1 do 100 wynosi: $sumka";

    echo "<hr>";

    $colors = ["czerwony", "niebieski", "zielony"];
    echo $colors[0];

    $product = [
        'name' => 'kartak',
        'price' => 5,
        'in_stock' => "tak"
    ];
    
    $numbers = [2, 4, 6, 8];
    array_push ($numbers, 10);
    
    $fruits = ["pamelo", "mango", "banan"];
    if (in_array("banan", $fruits)){
        echo "<p>banan na tablicy </p>";
    } else {
        echo "<p>banan nie na tablicy</p>";
    };

    
    ?>
</body>
</html>