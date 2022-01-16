<?php
$servername="localhost";
$username="root";
$password="";
$dbname="value";
$con= mysqli_connect($servernme,$username,$password,$dbname)
if($con){
  echo "connection ok";
}
$partyname=$_POST['partyname'];
$sql="INSERT INTO party(partyname)VALUES('$partyname)";
if(!mysqli_query($con,$sql)){
  echo "data has not saved";
} else{
  echo "Party Name Added";
}

?>
  