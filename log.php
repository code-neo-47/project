<?php
include('server.php');

$email=$_POST['email'];
$pass=md5($_POST['pass']);

$query="SELECT * FROM `student` WHERE `st_email`='$email' and `st_password`='$pass'";
$result=mysqli_query($con,$query);
//$count=mysqli_num_rows($result);


if($result>0)
	{?>
		<script>
			alert("login successful");
			window.location.href="index.php";
		</script>
		<?php
	}
else
	{?>
		<script type="text/javascript">
			alert("invalid login");
			window.location.href="index.php";
		</script>
		<?php
	}


?>