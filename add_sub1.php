<?php
include('server.php');

//$st_id=$_POST['st_id'];
$subcode=$_POST['subcode'];
$subname=$_POST['subname'];

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
		$sql="INSERT INTO `subject`(`sub_code`, `sub_name`) VALUES ('$subcode','$subname')";
		$res=mysqli_query($con,$sql);	
//}

if($res)
{
	?>
		<script> 
			alert("INSERTED SUCCESSFULLY");
			window.location.href="add_sub.php";
		</script>
   	<?php
}
else
{
	?>
		<script> 
			alert("INSERTING FAILED");
			window.location.href="add_sub.php";
		</script>
   	<?php
}
?>