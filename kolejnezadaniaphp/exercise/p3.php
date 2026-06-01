<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $plec = $_POST['plec'];
    echo "Plec: ". $plec; 
}
?>
