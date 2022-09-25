<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failo ikelimas</title>
</head>
<body>

<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="upload">Ikelti faila</button>
</form>

<?php 

if(isset($_POST["upload"])){

    $file = $_FILES["file"];
    var_dump($file);

    $file_size = $file["size"];
    $max_size = 1048576;
    $type = "pdf";
    echo "<br>";
    var_dump($file_size);

    $file_type_array = explode( ".",$file["name"]);
    $file_type = $file_type_array[1];
    var_dump($file_type);

    $file_dir = "uploads/";

    $file_path = $file_dir . $file["name"];

    if($file_size <= $max_size && $file_type == $type){
        move_uploaded_file($file["tmp_name"],$file_path);
    } else{
        echo 'Failas yra didesnis nei 1 MB arba jo formatas nera "pdf"';

    }

}


?>
    
</body>
</html>