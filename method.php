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