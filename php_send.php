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

        if (empty($_POST['amount']) || empty($_POST['type']) || empty($_POST['category']) || empty($_POST['recipient']) || empty($_POST['date']) ) {
            header("location: insert.php?error=emptyfields&status=&data=");
            exit();
        }
        else{
            header("location:insert.php?status=success&data=");
        }


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>