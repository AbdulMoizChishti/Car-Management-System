<?php
require_once "config.php";

if (isset($_REQUEST["Submit"])) {

    $Make = $_REQUEST["Make"];
    $Model = $_REQUEST["Model"];
    $IDcar = $_REQUEST["IDcar"];
    $Price = $_REQUEST["Price"];



    $ins = "UPDATE car SET Make='.$Make 'AND SET Model='.$Model 'AND SET Price='.$Price  'WHERE IDcar='.$IDcar ";
    $query1 = mysqli_query($connection, $ins);

    if ($query1) {
        echo "Records updated";
    }
}

