<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $con = mysqli_connect("localhost", "root", "", "php_practice");
    $sql = "SELECT * FROM exercises;";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $idik = $row['id'];
        $iduser = $row['user_id'];
        $tajtyl = $row['title'];
        $descr = $row['description'];
        $zadanie = $row['subject'];
        $datka = $row['due_date'];
        $stat = $row['status'];
        echo"$idik,$iduser,$tajtyl,$descr,$zadanie,$datka,$stat";
        
    };

}
?>
