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
   echo 'sucess';
   $stmt -> close();
   $conn -> close();
} 
// if (isset($_POST['submit'])) {
//    if (!empty($_POST['name']) && !empty($_POST['email'])
//    && !empty($_POST['phone'])&& !empty($_POST['pre']))
//    {
//       $name = $_POST['name'];
//       $email = $_POST['email'];
//       $phone = $_POST['phone'];
//       $pre = $_POST['pre'];
//       $committee = $_POST['committee'];

//       $query = "INSERT INTO form (id, name, email, phone, previous, committe)
//        VALUES (NULL, '$name', '$email', '$phone', '$pre', '$committee')";
//       $run = mysqli_query($conn,$query) or die(mysqli_error());
//       if ($run) {
//          echo 'successfully submitted';
//       }
//       else 
//       {
//          echo "not submitted";
//       }
//    }
//    else
//    {
//       echo " all fields required";
//    }

// }

?>