<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Management — Profile </title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <?php include 'header.inc'; ?>
<section id="profile" aria-labelledby="profile-title">
  <h1 id="profile-title">Profile</h1>
  <form>
    <fieldset>
      <legend>Edit Name, DOB, Gender</legend>
      <label for="name">Name:</label>
      <input id="name" type="text" placeholder="Full name" /><br />

      <label for="dob">DOB:</label>
      <input id="dob" type="date" /><br />

      <label for="gender">Gender:</label>
      <select id="gender">
        <option>Prefer not to say</option>
        <option>Female</option>
        <option>Male</option>
        <option>Non-binary</option>
        <option>Other</option>
      </select>
    </fieldset>

    <fieldset>
      <legend>Change Default Equipment</legend>
      <label for="def-equip">Default Equipment:</label>
      <select id="def-equip">
        <option>Recurve</option>
        <option>Compound</option>
        <option>Barebow</option>
        <option>Longbow</option>
      </select>
    </fieldset>

    <button type="button">Save Profile</button>
  </form>
</section>

<?php include 'footer.inc'; ?>
</body>
</html>
