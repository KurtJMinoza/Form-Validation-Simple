<?php
  session_start();
  $errortext = "";
  $erroraddress = "";
  $errorcontact = "";
  $errorfile = "";
  if(isset($_POST["submit"])) {
    $text = htmlspecialchars(trim($_POST["text"]));
    $address = htmlspecialchars($_POST["address"]);
    $contact = htmlspecialchars($_POST["contact"]); 

    if(empty($text) || strlen($text) < 5) {
      $errortext = "Error or Must Be 5 Characters Above";
    }
 
    if(empty($address) || strlen($address) < 20) {
      $erroraddress = "Please Provide Valid Address";
    }
    if(empty($contact) || !is_numeric($contact) || strlen($contact) < 11) {
      $errorcontact = "Contact number must contain exactly 11 digits.";
    }
   
    if(empty($errortext) && empty($erroraddress) && empty($errorcontact)) {
      $_SESSION["text"] = $text;
      $_SESSION["address"] = $address;
      $_SESSION["contact"] = $contact;
      header("Location: welcome.php");
      exit(); 
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="modal">
    <h1>Welcome To File Upload</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <input type="text" name="text" placeholder="Enter Title">
      <span><?php  echo $errortext; ?></span>
      <input type="text" name="address" placeholder="Enter Address">
      <span><?php  echo $erroraddress ; ?></span>
      <input type="text" name="contact" placeholder="Enter Contact Number">
      <span><?php  echo $errorcontact; ?></span>
      <input type="submit" name="submit">
    </form>
  </div>
 

</body>
</html>