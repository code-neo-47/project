<?php 
session_start();
$con=mysqli_connect("localhost","root","","db_student");
$errors=array();

//user login


if(isset($_POST['login'])){
$uemail=$_POST['email'];
$pass=md5($_POST['pass']);
$query="SELECT * FROM student WHERE st_email='$uemail' AND st_password='$pass'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
   $uname=$row["st_name"];
   $pass=$row["st_password"];
   $post=$row["post"];
  
}
 $_SESSION['uname']=$uname;

$_SESSION['po']=$post;
if(isset($post))
{
header ('location: admin.php');
}
else{
	header ('location: index.php');
}	
}
else{
	array_push($errors, "Wrong username/password combination");
	}
}


if (isset($_GET['logout'])) {
    session_unset(); 
    session_destroy();
    unset($_SESSION['uemail']);
}

?>