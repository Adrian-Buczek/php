<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $con = mysqli_connect("localhost", "root", "", "php_practice");
    $user_id = $_POST['user_id'];
    $sql = "DELETE FROM users WHERE id='$user_id'";
    if (mysqli_query($con, $sql)){
        echo"user pomyślnie usunięty wraz z jego zadaniami";
    }else {
        echo"coś poszło nie tak";
}}
?>
