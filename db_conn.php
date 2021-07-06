<?php
//database name
$dbName = "myfirstdb";
//username server
$user = "root";
//password server
$pass = "";
//create connection with database
$conn = mysqli_connect("localhost",$user,$pass,$dbName);
//if connection failed
if(!$conn)
{
    //error connection message
    echo "error connection db";
    die("Connection failed: " . mysqli_connect_error());
}else{
    //succes message and continue
    //echo "succes connection";
}

?>