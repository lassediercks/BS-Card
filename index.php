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
      <h1>Visitenkarten die niemand braucht</h1>
      <?php

        $GetDataQuery = "SELECT ID,Name,Titel FROM cards";
        $data = $conn->query($GetDataQuery);

        while($card = $data->fetch_assoc()) {
          echo "<b-card>" . $card["Titel"]. "</b-card>";
        }

        ?>

    </main>

    <div class="add-card">
      <h2 class="add-card-headline">Deine Karte hinzufügen</h2>
      <label class="label">
        <span class="label-title">Titel</span>
        <input
          class="label-input"
          type="text"
          placeholder="z.b. Die Frau der Stunde"
        />
      </label>
      <button class="add-card-button">Karte hinzufügen</button>
    </div>

    <?php 
      $query = "INSERT INTO `cards` (Name, Titel) VALUES ('Max Mustermann','PHP Entwickler')";


      // if ($conn->connect_error) {
      //   die("Connection failed: " . $conn->connect_error);
      // } 

      // if ($conn->query($query) === TRUE) {
      //     echo "New record created successfully";
      // } else {
      //     echo "Error: " . $query . "<br>" . $conn->error;
      // }

      $conn->close();
      ?>

    <script src="index.js"></script>
  </body>
</html>

