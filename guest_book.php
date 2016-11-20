<?php
include 'navbar.php';
  $navBar = new navbar();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Guest Book</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
  </head>

  <body>
    <?php echo $navBar; ?>
    <h1>Thanks for Coming!</h1>
      <p>Sign the guest book to let me know you came by.</p>
    <form action="dbConnect.php" method="post">
        <h4>Name</h4>
        <input type="text" name="name">
        <h4>Level</h4>
        <input type="text" name="level">
        <h4>Race</h4>
        <input type="text" name="race">
        <h4>Class</h4>
        <input type="text" name="class"><br>
        <input type="submit">
    </form>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>


