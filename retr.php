<!DOCTYPE html>
<html>

<head>
  <title>Table with database</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      color: #588c7e;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
    }

    th {
      background-color: #588c7e;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2

    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Make</th>
      <th>Model</th>
      <th>IDcar</th>
      <th>Price</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "cms");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Make, Model, IDcar, Price FROM car";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Make"] . "</td><td>" . $row["Model"] . "</td><td>" . $row["IDcar"] . "</td><td>"
          . $row["Price"] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </table>
</body>

</html>