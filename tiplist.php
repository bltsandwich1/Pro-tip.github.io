<html>
<body>

<?php
$con=mysqli_connect("localhost","root","Sandman1","test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tips1");
echo "<table border='0' width = \"100%\">
<tr>
<th>Tip</th>
<th>Location</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo"<tr>";
  echo"<td><a href=tips.php?id=".$row['id'].">" . $row['tip']."</a>" . "</td>". "<td>" . $row['location'] . "</td>";
  echo"</tr>";
}

mysqli_close($con);
?>










</body>
</html>