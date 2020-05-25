<?php
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<title> Decimal to Hex</title>
</head>
<body>
<h1>Decimal to hex</h1>
<?php
echo "<table>\n";
$dec = 0;
foreach (range(0, 15) as $row) {
    echo "<tr>\n";
    foreach (range(0, 15) as $col) {
        echo "\t<td>$dec = " . strtoupper(dechex($dec)) . "</td>\n";
        $dec = $dec + 1;
    }
    echo "</tr>\n";
}
?>
</table>
</body>
</html>
