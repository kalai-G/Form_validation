<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";
// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
else
{
        echo "Connected successfully";
}
// Database creation

$sql = 'CREATE Database mydb';  
if(mysqli_query( $conn,$sql)){  
  echo "Database mydb created successfully.";  
}else{  
echo "Sorry, database creation failed ".mysqli_error($conn);  
}  
mysqli_close($conn); 


?>