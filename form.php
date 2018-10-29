<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MSA";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_REQUEST('t1');
$b=$_REQUEST('t2');
$c=$_REQUEST('t3');
$d=$_REQUEST('t4');
$e=$_REQUEST('t5');
$f=$_REQUEST('t6');
$sql = "INSERT INTO TABLE Studentinfo VALUES ('$a', '$b', '$c' , '$d','$e', '$f')";

if ($conn->query($sql) === TRUE) {
    echo "Inserted successfully";
} else {
    echo "Error ";
}

$conn->close();
<html>
<body>
echo "View all details";
<input type="submit" value="View"/>
</body>
</html>
?>