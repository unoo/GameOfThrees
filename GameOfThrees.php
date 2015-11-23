<html>
<head>
  <title>The game of threes</title>
</head>
<body>
<form action="threes.php" method="post">
    Enter a value  <input type="text" name="integer" /><br />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
$i = $_POST['integer'];

echo $i;
echo "</br>";

do {if ($i % 3 == 0){
  $i = $i / 3;
  echo $i;
  echo "</br>";
} else if (($i + 1) % 3 == 0){
  echo "$i 1";
  echo "</br>";
  $i = ($i + 1) / 3;
  echo $i;
  echo "</br>";
} else {
  echo "$i -1 ";
  echo "</br>";
  $i = ($i - 1) / 3;
  echo $i;
  echo "</br>";
} } while ($i != 1);

?>
</body>
</html>
