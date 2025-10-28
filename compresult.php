
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Archery Management — Competition Results</title>
  <link rel="stylesheet" href="/styles/style.css" />
</head>
<body>
 <?php include 'header.inc'; ?>
  <main>
    <section id="competition-results" aria-labelledby="comp-title">
      <h1 id="comp-title">Competition Results</h1>

      <h2>View All Competitions</h2>
      <p>List of competitions (name, date) — placeholder.</p>

      <h2>See Ranks &amp; Scores</h2>
      <p>View competition results and link to your submitted scores — placeholder.</p>
    </section>
  </main>
 <?php include 'footer.inc'; ?>
  <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
</body>
</html>
