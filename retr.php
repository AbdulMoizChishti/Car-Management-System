<?php
include_once 'config.php';
$result = mysqli_query($connection,"SELECT * FROM car ");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>



 </head>
<body>



<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>

    <td>Make</td>
    <td>Model</td>
    
    <td>IDcar</td>
    <td>Price</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Make"]; ?></td><br>
    <td><?php echo $row["Model"]; ?></td><br> 
    <td><?php echo $row["IDcar"]; ?></td><br>
    <td><?php echo $row["Price"]; ?></td><br> 
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>