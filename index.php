<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Demo</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <h1>Recommended Books</h1>

  <?php 
    $books = [
      "Do Androids Dream of Electric Sheep",
      "The Langoliers",
      "Hail Mary"
    ];
  ?>

  <ul>
    <?php foreach ($books as $book) {
      echo "<li>$book</li>";
    };
    ?>
  </ul>

  <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book; ?></li>
    <?php endforeach; ?>
  </ul>

  <p>
    <?php echo $books[2]; ?>
  </p>

</body>
</html>