<?php

require_once "config.php";

if (isset($_REQUEST["submit"])) {

    $id = $_REQUEST["id"];



$sql = 'DELETE FROM car WHERE IDcar='.$id;
$query1 = mysqli_query($connection, $sql);


if($query1){
    header("Location: retr.php");
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"></div>
            <form  action= "delr.php" method="post" class="search-model-form">
               
            <label for="">Enter ID number</label>
            <input type="number" id="search-input" placeholder="ID" name= "id">
            <input type="submit" name="submit">
            </form>
        </div>
    </div>
    
</body>
</html>