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

      <b-card>Mir gehört der Laden hier</b-card>
      <b-card>Du Weißt schon Wer</b-card>
      <b-card>Der Retter</b-card>
      <b-card>Konkurrenzlos</b-card>
      <b-card>Die Kokurrenz</b-card>
      <b-card>König</b-card>
      <b-card>Weltherrscher</b-card>
      <b-card>Zielgruppe</b-card>
      <b-card> Der/Die mit den Spendierhosen </b-card>
      <b-card>Gott</b-card>
      <b-card>Ich bin's</b-card>
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

    <?php include 'connect-to-db.php'; ?>


    <?php
      $query = "INSERT INTO `cards` (`Name`, `Titel`) VALUES ('Max Mustermann','PHP Entwickler')";
      $conn->query($query)
    ?>
    <script src="index.js"></script>
  </body>
</html>

