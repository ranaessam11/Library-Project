<?php
include('connection.php');
session_start();

$Email = $_POST['Email'];
$Password = $_POST['Password'];

if(empty($_POST['Email']) || empty($_POST['Password'])){
echo "Fill all the fields!";
}else{

$sql = "SELECT * FROM [dbo].[admins] WHERE Email='$Email' AND Password ='$Password'";
$result = sqlsrv_query($conn, $sql);  

if($result === false){
 die( print_r( sqlsrv_errors(), true));
}

if(sqlsrv_has_rows($result) != 1){
   echo "You Are Not Admin !";
}else{
header("Location: Home.php");
}
}

?>