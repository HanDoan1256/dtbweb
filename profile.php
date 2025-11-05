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

<?php
session_start();
$name      = $_SESSION['name']      ?? '—';
$dob       = $_SESSION['dob']       ?? '—';
$gender    = $_SESSION['gender']    ?? '-';
$equipment = $_SESSION['def_equip'] ?? '-';
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
?>

<section id="profile">
  <h1>Profile</h1>
  <p><strong>Name:</strong> <?= e($name) ?></p>
  <p><strong>DOB:</strong> <?= e($dob) ?></p>
  <p><strong>Gender:</strong> <?= e($gender) ?></p>
  <p><strong>Default Equipment:</strong> <?= e($equipment) ?></p>
</section>

<?php include 'footer.inc'; ?>
</body>
</html>
