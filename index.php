<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Flashcards</title>
  <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
  <h1>Flashcards</h1>
  <p>Hover over cards reveal anwser.</p>
  <ul class="cards">
  <?php
    // get images in dir
    // shuffle list of images
    // show images in directory
    foreach(glob('./cards/*') as $card) :
      $back = str_replace('./cards/', '', str_replace('.jpg', '', $card) );
      echo "<li><img src=\"$card\" class=\"\"> <span>$back</span> </li>";
    endforeach;
  ?>
  </ul>
  <script src="./assets/js/main.js"></script>
</body>
</html>