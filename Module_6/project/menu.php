<!DOCTYPE html>
<html>

<head>
  <title>[Menu] Wings? Wings. Wings!</title>
  <?php include("includes/head.php"); ?>
</head>

<body>

  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <div id="content">
    <div id="menu">
      <h1>Menu</h1>
      <?php
        include("includes/dbConn.php");
        $conn = openConn();
        $sql = "SELECT name_description.name, name_description.description, price.price, price.specialprice FROM name_description INNER JOIN price ON name_description.ID = price.ID";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $price = 0;
            if ($row["specialprice"]) {
              $price = $row["specialprice"];
            } else {
              $price = $row["price"];
            }
            echo "<h3>" . $row["name"] . " - $" . $price . "</h3>";
            echo "<p>" . $row["description"] . "</p>";
          }
        } else {
          echo "No Specials Right Now!";
        }
        closeConn($conn);
      ?>
    </div>
  </div>

    <?php include("includes/footer.php"); ?>

</body>

</html>
