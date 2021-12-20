<?php
echo "heloo";
$db_name = "note";
$db_host = "localhost";
$db_username = "root";
$db_password = "";

$conn = mysqli_connect($db_username, $db_host, $db_name, $db_password);
if(!$conn){
     echo "failed to connect!"; 
}

$input = $_POST['text_input'];

echo $input;

$sql = "INSERT INTO notes (text) VALUES ('$input')";

$result =  mysqli_query($conn, $sql);
if(!$result){
     echo "error: ". mysqli_error($conn);
}
header("location: http://localhost/react-app/index.html");
?>