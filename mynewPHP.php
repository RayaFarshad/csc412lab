<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "csc412";
$password = "csc412";
$dbname = "csc412";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM rfarshad";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["studentId"]. " - Name: " . $row["name"]. " " . $row["gpa"]. " ".$row["age"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

</body>
</html>