<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Management — Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <?php include 'header.inc'; ?>
<section id="dashboard" aria-labelledby="dash-title">
  <h1 id="dash-title">Archer Dashboard</h1>

  <h2>View Summary</h2>
  <ul>
    <li>Recent Scores: 604 (WA70/122, 2025-10-21)</li>
    <li>PBs: 632 (Portsmouth, Recurve)</li>
  </ul>

  <h2>Quick Access</h2>
  <ul>
    <li><a href="practice-score.php">Enter Practice Score</a></li>
    <li><a href="my-scores.php">My Scores</a></li>
    <li><a href="round-info.php">Round Info Lookup</a></li>
  </ul>
</section>

<?php include 'footer.php'; ?>
</body>
</html>