<?php
$mysqli = new mysqli("localhost", "root", "", "studentgrade");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, name, grade
FROM studentgrades WHERE name = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $grade);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $id . "</td>";
echo "<th>NAME</th>";
echo "<td>" . $name . "</td>";
echo "<th>GRADE</th>";
echo "<td>" . $grade . "</td>";
echo "</tr>";
echo "</table>";
?>