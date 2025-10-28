<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Management — Personal Bests</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <?php include 'header.inc'; ?>

<section id="personal-bests" aria-labelledby="pb-title">
  <h1 id="pb-title">Personal Bests</h1>

  <ul>
    <li>Show highest score (max total) per round</li>
    <li>Compare with Club Best</li>
  </ul>

  <table>
    <thead>
      <tr>
        <th>Round</th>
        <th>Your PB</th>
        <th>Club Best</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Portsmouth</td><td>632</td><td>655</td></tr>
      <tr><td>WA70/122</td><td>604</td><td>645</td></tr>
    </tbody>
  </table>
</section>

<?php include 'footer.inc'; ?>
</body>
</html>