
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Archery Management — My Scores</title>
  <link rel="stylesheet" href="/styles/style.css" />
</head>

<body>
<?php include 'header.inc'; ?>
  <main>
    <section id="my-scores" aria-labelledby="scores-title">
      <h1 id="scores-title">My Scores</h1>

      <h2>Filter</h2>
      <form>
        <label for="filter-round">Round:</label>
        <select id="filter-round">
          <option>Any</option>
          <option>WA70/122</option>
          <option>Portsmouth</option>
          <option>WA1440</option>
        </select>

        <label for="from-date">From:</label>
        <input type="date" id="from-date" />

        <label for="to-date">To:</label>
        <input type="date" id="to-date" />

        <button type="button">Apply</button>
      </form>

      <h2>Sort</h2>
      <form>
        <label><input type="radio" name="sort" checked /> By Date</label>
        <label><input type="radio" name="sort" /> By Total Score</label>
      </form>

      <h2>View Status</h2>
      <ul>
        <li>Pending</li>
        <li>Approved</li>
        <li>Rejected</li>
      </ul>

      <h2>Sample List</h2>
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Round</th>
            <th>Equipment</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>2025-10-21</td><td>WA70/122</td><td>Recurve</td><td>604</td><td>Approved</td></tr>
          <tr><td>2025-10-14</td><td>Portsmouth</td><td>Recurve</td><td>632</td><td>Approved</td></tr>
          <tr><td>2025-10-05</td><td>70m Practice</td><td>Recurve</td><td>590</td><td>Pending</td></tr>
        </tbody>
      </table>
    </section>
  </main>
<?php include 'footer.inc'; ?>
</body>
</html>