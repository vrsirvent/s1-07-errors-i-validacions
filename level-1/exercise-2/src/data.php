<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Data</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <a href="index.html">Back to the form</a>
    <h2>Collected Data:</h2>
    <p>Username: <?= htmlspecialchars($_SESSION['username']) ?></p>
    <p>Age: <?= htmlspecialchars($_SESSION['age']) ?></p>
    <p>City/Town: <?= htmlspecialchars($_SESSION['location']) ?></p>
    <p>Email address: <?= htmlspecialchars($_SESSION['email']) ?></p>
    <a href="dataStored.php">View data stored in session</a>
  </body>
</html>
