<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->

<?php
$password = $_GET["pass"];
  if ($password == "Boolean") {
    $class = "green";
  } else {
    $class = "red";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>php-get-params</title>
  </head>
  <body>
    <p class="<?php echo $class; ?>"><?php echo $password; ?></p>
  </body>
</html>
