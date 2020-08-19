<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Neptune";


// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset("utf8"); 
// Check connection
if (!$conn) {
    
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO Expenses (amount , type , category , recipient , date)

VALUES ('$_POST[amount]' , '$_POST[type]' , '$_POST[category]' ,'$_POST[recipient]' , '$_POST[date]')";

if (mysqli_query($conn, $sql)) {
    
    header("location:insert.php"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>