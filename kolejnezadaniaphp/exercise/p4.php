<?php


if(strlen($_POST['imiono'])>= 3){
    if(!empty($_POST['drugieimiono'])){
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['czekoboks'])){
    $nejmik = $_POST['imiono'];
    $druginejmik = $_POST['drugieimiono'];
    echo "$nejmik,$druginejmik";

}else{
    echo"ZAZNACZ TERMSY!";
};
    }else{
        echo"wpisz coś w nazwisku!!";
    }
} else {
    echo"za krótkie nazwy!! minimum 3 znaki";
}
?>
