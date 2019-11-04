<!DOCTYPE html>
<html>

<head>
  <title>Wings? Wings. Wings!</title>
  <?php include("includes/head.php"); ?>
  <script src="js/orderhandling.js"></script>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <div id="content">
    <div id="foodlist">
      <?php
        include("includes/dbConn.php");
        $conn = openConn();
        $sql = "SELECT name_description.name, name_description.description, price.price, price.specialprice FROM name_description INNER JOIN price ON name_description.ID = price.ID";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo "<ul class=\"foodlist\">";
          $ctr = 0;
          while($row = $result->fetch_assoc()) {
            $price = 0;
            if ($row["specialprice"]) {
              $price = $row["specialprice"];
            } else {
              $price = $row["price"];
            }
            echo "<li id=\"" . $ctr . "\" class=\"fooditem\">";
            echo "<div class=\"fooditemdescription\">";
            echo "<h3>" . $row["name"] . "</h3>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<h2>$" . $price . "</h2>";
            echo "</div>";
            echo "<div class=\"fooditeminteract\">";
            echo "<input type=\"text\" name=\"qty\">";
            echo "<button type=\"button\" onclick=\"addToOrder(" . $ctr . ")\">Add to Order</button>";
            echo "</div>";
            echo "</li>";
            $ctr = $ctr + 1;
          }
          echo "</ul>";
        } else {
          echo "Something Went Wrong!!!";
        }
        closeConn($conn);
      ?>
    </div>
    <div id="orderlist">
      <h3 id="additemstext">Add items to your order</h3>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>
</body>

</html>
