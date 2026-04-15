<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
    <h2>Osoba 1</h2>
    <label for="imie">Imie:</label>
    <input type="text" name="imie"  required>
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko"  required>
    <label for="wiek">Wiek:</label>
    <input type="number" name="wiek" min="18" max="90">
    <label for="email">E-mail:</label>
    <input type="email" name="email">
    <label for="haslo">Hasło:</label>
    <input type="password" name="haslo" min="8"> 
<br>
<h2>Osoba 2</h2>
    <label for="imie2">Imie:</label>
    <input type="text" name="imie2" required>
    <label for="nazwisko2">Nazwisko:</label>
    <input type="text" name="nazwisko2" required>
    <label for="wiek2">Wiek:</label>
    <input type="number" name="wiek2" min="18" max="90">
    <label for="email2">E-mail:</label>
    <input type="email" name="email2">
    <label for="haslo2">Hasło:</label>
    <input type="password" name="haslo2" min="8"> 
    <br>
    <button type="submit">zatwierdź</button>
    <button type="reset">reset</button>
</form>
<br>

<br>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $wiek = $_POST["wiek"];
        $email = $_POST["email"];
        $haslo = $_POST["haslo"];

        $imie2 = $_POST["imie2"];
        $nazwisko2 = $_POST["nazwisko2"];
        $wiek2 = $_POST["wiek2"];
        $email2 = $_POST["email2"];
        $haslo2 = $_POST["haslo2"];

        

     if (empty($imie)){
        echo "<p>Brak pierwszego imienia</p>";
    }
     if (empty($nazwisko)){
         echo "<p>Brak pierwszego nazwiska</p>";
     }


     if (empty($imie2)){
         echo "<p>Brak drugiego imienia</p>";
     }
     if (empty($nazwisko2)){
         echo "<p>Brak drugiego nazwiska</p>";
     }
     else{
        echo "Witajcie $imie1 i $imie2";
     }
    }else{
        echo "<h1>Witajcie $imie i $imie2</h1>";
        echo "<h2>Dane osoby 1:</h2>";
        echo "Imię: $imie<br>";
        echo "Nazwisko: $nazwisko<br>";
        echo "Wiek: $wiek lat<br>";
        echo "Email: $email<br>";
        echo "Hasło: $haslo<br>";
        
        echo "<h2>Dane osoby 2:</h2>";
        echo "Imię: $imie2<br>";
        echo "Nazwisko: $nazwisko2<br>";
        echo "Wiek: $wiek2 lat<br>";
        echo "Email: $email2<br>";
        echo "Hasło: $haslo2<br>";
    }
?>
</body>
</html>