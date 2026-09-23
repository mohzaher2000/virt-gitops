<?php
$colour = getenv('font-colour') ?: 'black';
if (!preg_match('/^(#[0-9a-fA-F]{3,8}|[a-zA-Z]+)$/', $colour)) {
    $colour = 'black';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to my Demo</title>
  <style>
    body { margin: 0; min-height: 100vh; display: grid; place-items: center; font-family: Arial, sans-serif; }
    h1 { font-size: clamp(3rem, 8vw, 6rem); text-align: center; color: <?= htmlspecialchars($colour, ENT_QUOTES, 'UTF-8') ?>; }
  </style>
</head>
<body>
  <h1>Welcome to my Demo</h1>
</body>
</html>
