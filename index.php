<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Demo</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <?php 
    $name = "Neuromancer";
    $read = true; 
    $number = false;

    if($read) {
      $message = "You have read $name";
    } else {
      $message = "You have NOT read $name";
    }

    if($number) {
      $lucky = "You are the first number";
    } else {
      $lucky = "You are NOT the first number";
    }
  ?>

  <h1>
    <?= $message ?>
  </h1>

  <h2>
    <?= $lucky ?>
  </h2>
  
</body>
</html>