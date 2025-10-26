<?php
session_start();
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Data stored</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <a href="index.html">Back to the form</a>
    <h2>Data stored in session:</h2>
    <?php if (!empty($_SESSION['username']) && !empty($_SESSION['email'])): ?>
        <p>Username: <?= htmlspecialchars($_SESSION['username']) ?></p>
        <p>Age: <?= htmlspecialchars($_SESSION['age']) ?></p>
        <p>City/Town: <?= htmlspecialchars($_SESSION['location']) ?></p>
        <p>Email address: <?= htmlspecialchars($_SESSION['email']) ?></p>
    <?php else: ?>
        <p>No data in session.</p>
    <?php endif; ?>
  </body>
</html>
