<!DOCTYPE html>
<html>

<head>
  <title>Wings? Wings. Wings!</title>
  <?php include("includes/head.php"); ?>
  <script src="js/slideshow.js"></script>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <div id="content">
    <div id="aboutus">
      <h2>About Us:</h2>
      <p>Started as playing around with wing sauces, Wings? Wings. Wings! has grown into a very exclusive wing making restaurant. We pride ourselves in only making wing sauces we feel we have perfected.</p>
    </div>
    <div id="fooddiv">

      <?php include("includes/specials.php"); ?>

      <div id="foodslideshow">
        <div class="slideshowcontainer">
          <div class="slideshow fade">
            <img src="img/circlelogo.png">
          </div>
          <div class="slideshow fade">
            <img src="img/sampfood1.jpg">
          </div>
          <div class="slideshow fade">
            <img src="img/sampfood2.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>
</body>

</html>
