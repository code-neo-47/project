<?php
include('server.php');

$subid=$_POST['id'];
$code=$_POST['code'];
$name=$_POST['name'];

$query="UPDATE `subject` SET `sub_code`='$code',`sub_name`='$name' WHERE `sub_id`='$subid'";
$result=mysqli_query($con,$query);
if($result)
	{?>
		<script>
			alert("UPDATED");
			window.location.href="view_sub.php";
		</script>
		<?php
	}
else
	{
	?>
		<script> 
			alert("UPDATE Failed");
			window.location.href="edit_sub.php";
		</script>
   	<?php
	}


?>
