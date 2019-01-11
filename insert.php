<?php 
include 'connect-to-db.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main class="content">
  <?php


$inputVar = $_POST["Titel"];
$input = (string)$inputVar;

echo $input;
$query = "INSERT INTO `cards` (Name, Titel) VALUES ('Max Mustermann','$input')";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($query) === TRUE) {
    // echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

echo "<div class='card-added'>
<div class='scard-added_content'>
 <h1>Deine Karte ist dabei!</h1> </br> <a class='bc-button' href='/'>Direkt mal anschauen</a>
</div>
 </div>";
$conn->close();

  ?>
  </main>
</body>
</html>
