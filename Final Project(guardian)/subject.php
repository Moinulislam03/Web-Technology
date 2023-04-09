<?php
$mysqli = new mysqli("localhost", "root", "", "subject");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT SUBJECT, GRADE
FROM subjects WHERE SUBJECT = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($sno, $grade,);
$stmt->fetch();
$stmt->close();
  
echo "<table>";
echo "<tr>";
echo "<th>SUBJECT</th>";
echo "<td>" . $sno . "</td>";
echo "<th>GRADE</th>";
echo "<td>" . $grade . "</td>";
echo "</tr>";
echo "</table>";
?>