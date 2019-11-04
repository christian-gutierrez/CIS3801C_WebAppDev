<!DOCTYPE html>
<html>

<head>
  <title>Wings? Wings. Wings!</title>
  <?php include("includes/head.php"); ?>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <div id="content">
    <form>
      Name:<br>
      <input type="text" name="name"><br>
      Email:<br>
      <input type="text" name="email"><br>
      Message:<br>
      <textarea rows="5" cols="60" name="message"><br>
      <input type="submit" value="Send">
    </form>
  </div>
  <?php include("includes/footer.php"); ?>
</body>

</html>
