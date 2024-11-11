<?php
session_start();
if (isset($_SESSION["text"], $_SESSION["address"], $_SESSION["contact"])) {
  $text = htmlspecialchars($_SESSION["text"]);
  $address = htmlspecialchars($_SESSION["address"]);
  $contact = htmlspecialchars($_SESSION["contact"]);
}

else {
   header("Location: index.php");
  exit();
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1><?php echo "Welcome $text" ?></h1>
  <h1><?php echo "Welcome $address" ?></h1>
  <h1><?php echo "Welcome $contact" ?></h1>


</body>
</html>