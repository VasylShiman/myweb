<?php
require "config.php";

header("Content-Type: application/json");
//$name = 'Tom';
$name = $_GET['name'];
$idforName = 0;

if (isset($name))
{
  $result = $conn->query( "SELECT * FROM users" );
  $resID = GetResult($result,$name);
  $conn->close();
  echo json_encode($resID) ;
  
}
else 
{
  echo("ERROR to get name");
}




function GetResult($result_set,$name)
{
  
  while (($row = $result_set->fetch_assoc())!= false)
  {
    if ( $row['name'] == $name )
    {
    $idforName = $row['id'];
    }
  }
  return $idforName;
}
?>