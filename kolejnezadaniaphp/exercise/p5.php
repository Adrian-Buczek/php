<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $conn = mysqli_connect("localhost", "root", "", "php_practice");
    $kimie = $_POST['first_name'];
    $knazwisko = $_POST['last_name'];
    $kemailek = $_POST['email'];
    $indekes = $_POST['student_index'];
    $sql = "INSERT INTO users (first_name, last_name, email, student_index) VALUES ('$kimie', '$knazwisko', '$kemailek', '$indekes')";
    if (mysqli_query($conn, $sql)){
         echo"dodano usera!";
    }else{
        echo"nie dodano";
    };
}else{
    echo"jakis błąd";
}
?>
