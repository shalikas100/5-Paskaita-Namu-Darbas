<?php
echo "Prisijungta";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>

<form action="" method = "POST">
<button <?php 
if(isset($_POST["atsijungti"])){
   echo 'style="display: none"';
}
 ?> 
  type = "submit" name = "atsijungti">Atsijungti</button>
</form>

</body>
</html>

<?php 
if(isset($_POST["atsijungti"])){
    setcookie ("skaitiklis","",time()-3600);
}

?>


