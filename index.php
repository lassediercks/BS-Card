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
      <h1 class="title">
        <span class="title-small">
        Nicht ganz so ernstzunehmende
        </span>
        Visitenkarten
      </h1>

      <label class="bc-label name-input">
        <span class="bc-label__text">Name auf den Karten</span>
        <input id="nameInput" placeholder="z.b. Judas von Nazareth" type="text" class="bc-input">
      </label>

      <?php

        $GetDataQuery = "SELECT ID,Name,Titel FROM cards";
        $data = $conn->query($GetDataQuery);

        while($card = $data->fetch_assoc()) {
          echo "<b-card>" . $card["Titel"]. "</b-card>";
        }

        ?>

    </main>

    <div class="add-card">
      <div class="add-card__content">

        <h2 class="add-card-headline">Eine Karte hinzufügen</h2>


        <form action="insert.php" method="post">

        <label class="bc-label">
          <span class="bc-label__text">Titel</span>
          <input
            class="bc-input"
            type="text"
            name="Titel"
            placeholder="z.b. Die Frau der Stunde"
          />
        </label>
        <button class="bc-button">Karte hinzufügen</button>
        </form>
      </div>

    </div>


    <script src="index.js"></script>
  </body>
</html>

