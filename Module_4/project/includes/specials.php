<div id="specials">
  <?php
    include("dbConn.php");
    $conn = openConn();
    $sql = "SELECT name_description.name, price.price, price.specialprice FROM name_description INNER JOIN price ON name_description.ID = price.ID WHERE price.specialprice <> 0";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $specNum = 1;
      echo "<h2>Specials:</h2>";
      while($row = $result->fetch_assoc()) {
        echo "<h3>Special " . $specNum . ":</h3>";
        echo "<p>" . $row["name"] . " - $" . $row["specialprice"] . "</p>";
        $specNum = $specNum + 1;
      }
    } else {
      echo "No Specials Right Now!";
    }
    closeConn($conn);
  ?>
</div>
