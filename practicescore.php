<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Management — Practice Score</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <?php include 'header.inc'; ?>
<section id="practice-score" aria-labelledby="eps-title">
  <h1 id="eps-title">Enter Practice Score</h1>

  <ol>
    <li>
      <strong>Step 1: Select Round</strong>
      <div>
        <label for="eps-round">Round:</label>
        <select id="eps-round" name="round">
          <option>WA70/122</option>
          <option>Portsmouth</option>
          <option>WA1440</option>
        </select>
      </div>
    </li>

    <li>
      <strong>Step 2: Select Equipment</strong>
      <div>
        <label for="eps-equip">Equipment:</label>
        <select id="eps-equip" name="equipment">
          <option>Recurve</option>
          <option>Compound</option>
          <option>Barebow</option>
          <option>Longbow</option>
        </select>
      </div>
    </li>

    <li>
      <strong>Step 3: Set Date &amp; Time</strong>
      <div>
        <label for="eps-date">Date:</label>
        <input type="date" id="eps-date" />
        <label for="eps-time">Time:</label>
        <input type="time" id="eps-time" />
      </div>
    </li>

    <li>
      <strong>Step 4: Enter Scores (end totals)</strong>
      <p>Type the total for each end (e.g., up to 60 for 6 arrows). The grand total updates automatically.</p>

      <table id="endsTable" border="1" cellpadding="6">
        <thead>
          <tr><th>End</th><th>End total</th></tr>
        </thead>
        <tbody id="endsBody"><!-- rows from JS --></tbody>
      </table>

      <p>
        <button type="button" id="addEndBtn">+ Add End</button>
        <button type="button" id="clearBtn">Clear</button>
      </p>

      <p>Total: <strong id="grandTotal">0</strong></p>
    </li>

    <li>
      <strong>Step 5: Review &amp; Submit</strong>
      <p>(→ staging scores summary)</p>
      <button type="button" id="submitBtn">Submit Practice Score</button>
    </li>
  </ol>
</section>

<script src="js/score-input.js"></script>
<?php include 'footer.php'; ?>
