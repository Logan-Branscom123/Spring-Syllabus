<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
</head>
<body>

<h2>Hello Page</h2>

<?php
  $first = $_GET['first'];
  $last  = $_GET['last'];

  echo "Hello $first $last!";
?>

</body>
</html>
