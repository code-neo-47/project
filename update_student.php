<?php
include('server.php');

$stid=$_POST['id'];
$usn=$_POST['usn'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=md5($_POST['pass']);

$query="UPDATE `student` SET `st_usn`='$usn',`st_name`='$name',`st_email`='$email',`st_password`='$pass' WHERE `st_id`='$stid'";
$result=mysqli_query($con,$query);
if($result)
	{?>
		<script>
			alert("UPDATED");
			window.location.href="view_student.php";
		</script>
		<?php
		echo $usn;
	}
else
	{
	?>
		<script> 
			alert("UPDATE Failed");
			window.location.href="edit_student.php";
		</script>
   	<?php
	}


?>
