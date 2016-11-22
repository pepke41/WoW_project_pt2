<?php
include 'navbar.php';
  $navBar = new navbar();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thank You!</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
  </head>

  <body>
    <?php echo $navBar; ?>
    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $conn = mysql_connect($dbhost, $dbuser);
    if(! $conn )
    {
      die('Could not connect: ' . mysql_error());
    }
    $sql = "INSERT INTO `Guest Book`(`Name`, `Level`, `Race`, `Class`) VALUES ('$_POST[name]', '$_POST[level]', '$_POST[race]', '$_POST[class]')";
    mysql_select_db('Guest Book');
    $retval = mysql_query($sql, $conn);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "Thank you! Your response has been recorded!\n";
    mysql_close($conn);
    ?>
  </body>
</html>
