<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname ="LuanTech";


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pre = $_POST['pre'];
$committee = $_POST['committee'];
$conn = new mysqli($server,$username,$password,$dbname);
if ($conn -> connect_error) {
   die('connection failed'.$conn ->connect_error);
}
else
{
   $stmt = $conn -> prepare("INSERT INTO form (id, name, email, phone, previous, committe)
          VALUES (NULL, ?, ?, ?, ?, ?)");
   $stmt -> bind_param("ssiss",$name,$email,$phone,$pre,$committee);
   $stmt -> execute();
   echo 'success';
   $stmt -> close();
   $conn -> close();
} 
?>