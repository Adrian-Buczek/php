<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
 $imie = $_POST['namee'];
 $selekt = $_POST['selekt'];
 echo "$imie, $selekt";
}
?>