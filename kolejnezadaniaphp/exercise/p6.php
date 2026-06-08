<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $conn = mysqli_connect("localhost", "root", "", "php_practice");
    $idjuzera = $_POST['user_id'];
    $tejtyl = $_POST['title'];
    $subdzekt = $_POST['subject'];
    $teksty = $_POST['description'];
    $dataa = $_POST['due_date'];
    $statusek = $_POST['status'];
    
    
    $sqll = "INSERT INTO exercises (user_id, title, description, subject, due_date, status) VALUES ('$idjuzera','$tejtyl', '$teksty', '$subdzekt', ' $dataa', '$statusek')";
    if (mysqli_query($conn, $sqll)){
         echo"dodano zadania!";
    }else{
        echo"nie dodano";
    };
}else{
    echo"jakis błąd";
}


?>
