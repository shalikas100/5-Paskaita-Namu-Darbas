<?php
$vardas1 = "admin";
$slaptazodis1 = "123456";

$vardas = $_POST["vardas"];
$slaptazodis = $_POST["slaptazodis"];

$veiksmas = $_POST["veiksmas"];

if(isset($veiksmas)){
if($vardas ==$vardas1 && $slaptazodis == $slaptazodis1){
    echo header("location:manopaskyra.php");

    if(!isset($_COOKIE["skaitiklis"])) {
        setcookie("skaitiklis", 0,time()+3*3600);
        $i = 0;
    } else {
        $i = $_COOKIE["skaitiklis"];
        $i++;
        setcookie("skaitiklis", $i,time()+3*3600);
    }

}
else{
    echo header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
}
}
 ?>
