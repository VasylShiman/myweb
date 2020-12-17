<?php
$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DBname = "test";

$conn = mysqli_connect($HOST,$USER,$PASSWORD,$DBname);

if(!$conn){
  die("Connection failed db : ".mysqli_connect_error() );
}
//echo "Connected successfully";

?>





