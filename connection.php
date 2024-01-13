<?php
$a="localhost";
$b="root";
$c="";
$d="pensa";

$conn=mysqli_connect($a,$b,$c,$d);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $conn->set_charset("utf8");

 function handleDatabaseError($message, $query = "")
{
    global $conn;
 
    error_log("Database Error: $message\n$query");
 
    die("An error occurred while processing your request. Please try again later.");
}
 