<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Management — Round Info</title>
      <link rel="stylesheet" href="/styles/style.css?v=1" />
</head>

<body>
    <?php include 'header.inc'; ?>

<section id="round-info" aria-labelledby="round-title">
  <h1 id="round-title">Round Info Lookup</h1>

  <h2>Select Round → Show:</h2>
  <form>
    <label for="ri-round">Round:</label>
    <select id="ri-round">
      <option>WA70/122</option>
      <option>Portsmouth</option>
      <option>WA1440</option>
    </select>
    <button type="button">Show Info</button>
  </form>

  <h3>Details</h3>
  <ul>
    <li>Distances</li>
    <li>Number of Ends</li>
    <li>Target Face</li>
  </ul>

  <h3>Option</h3>
  <p>Show Equivalent Rounds (placeholder)</p>
</section>

<?php include 'footer.php'; ?>
</body>
</html>