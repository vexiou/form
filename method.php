<?php 
// DB Connection
$SERVER = "local_host";
$username = "root";
$password = "";
$dbname = "demo_2_nov";

//create conection
$conn = new mysqli($server,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("connection failed: ". $conn->connection_error);
}else{
    echo"connection successful!";
}

//GET VALUE FROM FORM
$email = $_POST ["email"];
$password = $_POST ["password"];
$firstname = $_POST ["firstname"];
$lastname = $_POST ["lastname"];
$username = $_POST ["username"];

//QUERY TO INSERT VALUES TO DB
$insertQuery = "INSERT INTO `users` (email,password,firstname,lastname,username) VALUES ($email,$password,$firstname,$lastname,$username)";

$conn->query($insertQuery);

// The SQL QUERY TO GET DATA FROM USER TABLE IN THE DB
$sqlquery ="SELECT * FROM `users`";
$result = $conn->query($sqlquery)

//CHECK IF QUERY RESULTS DATA
if($result->num_rows > ){
    echo"Successfully fetched users <br><br>";

//Return ALL DATA FROM USER
while($row = $result->fetch_assoc()){
    echo "id: ".$row["id"] . " | firstname: ", $row["firstname"] .  " | lastname: ", $row["lastname"];
}
}

?>
