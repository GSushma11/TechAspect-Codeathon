<html>
<?php
$con = mysql_connect("localhost","root","");
$g=$_REQUEST('t7');
if (!$con)
{
  die('Could not connect: ' . mysql_error());  }
mysql_select_db("MSA", $con);
$result = mysql_query("SELECT * FROM Studentinfo where Psper>='$g");
echo "<table border='1'>

<tr>

<th>Name</th>
<th>Age</th>
<th>Branch</th>
<th>Year</th>
<th>Semester</th>
<th>Previous Semester Percentage</th>

</tr>";
while($row = mysql_fetch_array($result))
  {

  echo "<tr>";

  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Branch'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
 echo "<td>" . $row['Semester'] . "</td>";
 echo "<td>" . $row['Previous Semester'] . "</td>";

  echo "</tr>";

  }
echo "</table>";
mysql_close($con);

?>
</body>

</html>
