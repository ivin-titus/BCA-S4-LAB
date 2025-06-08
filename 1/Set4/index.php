<!DOCTYPE html>
<html>
<head>
  <title>Sum Two Numbers</title>
</head>
<body>
  <h2>Enter Two Numbers</h2>
  <form method="post">
    <label>Number 1:</label>
    <input type="number" name="num1" required><br><br>

    <label>Number 2:</label>
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Calculate Sum">
  </form>

  <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
      $num1 = floatval($_POST['num1']);
      $num2 = floatval($_POST['num2']);
      $sum = $num1 + $num2;
      echo "<h3>Result: $num1 + $num2 = <strong>$sum</strong></h3>";
    }
  ?>
</body>
</html>