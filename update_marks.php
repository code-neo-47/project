<?php
include('server.php');

$stid=$_POST['id'];
$usn=$_POST['usn'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=md5($_POST['pass']);

$query="UPDATE `marks` SET `st_id`='$',`sem_id`='$name',`sub_id`='$email',`mark`='$pass' WHERE `ma_id`='$'";
$result=mysqli_query($con,$query);
if($result)
	{?>
		<script>
			alert("UPDATED");
			window.location.href="view_marks.php";
		</script>
		<?php
		echo $usn;
	}
else
	{
	?>
		<script> 
			alert("UPDATE Failed");
			window.location.href="edit_marks.php";
		</script>
   	<?php
	}


?>
