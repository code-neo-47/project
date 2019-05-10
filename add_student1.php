<?php
include('server.php');

//$st_id=$_POST['st_id'];
$usn=$_POST['usn'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$post=$_POST['post'];
/*if($st_id==0)
{
	?>
		<script> 
			alert("INSERT FAILED: PLEASE SELECT A COLLEGE AND TRY AGAIN!");
			window.location.href="signup.php";
		</script>
  	<?php
}*/
//else
//{		
		$passmd5=md5($pass);
		$sql="INSERT INTO `student`(`st_usn`, `st_name`, `st_email`, `st_password`,`post`) VALUES ('$usn','$name','$email','$passmd5','$post')";
		$res=mysqli_query($con,$sql);	
//}

if($res)
{
	?>
		<script> 
			alert("FACILITY INSERTED SUCCESSFULLY");
			window.location.href="add_student.php";
		</script>
   	<?php
}
else
{
	?>
		<script> 
			alert("FACILITY INSERTING FAILED");
			window.location.href="add_student.php";
		</script>
   	<?php
}
?>