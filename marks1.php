<?php
include('server.php');

$st=$_GET['st'];
$sem=$_GET['sem'];
$sub=$_GET['sub'];
$ma1=$_GET['ma1'];
$ma2=$_GET['ma2'];
$ma3=$_GET['ma3'];
$ma4=$_GET['ma4'];
$ma5=$_GET['ma5'];
$t=$ma1+$ma2+$ma3+$ma4+$ma5;
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
		//$passmd5=md5($pass);
		$sql="INSERT INTO `marks` (`st_id`, `sem_id`, `sub_id`, `ma1`, `ma2`, `ma3`, `ma4`, `ma5`, `total`) VALUES ('$st','$sem','$sub','$ma1','$ma2','$ma3','$ma4','$ma5')";
		$res=mysqli_query($con,$sql);	
//}

if($res)
{
	?>
		<script> 
			alert("FACILITY INSERTED SUCCESSFULLY");
			window.location.href="marks.php";
		</script>
   	<?php
}
else
{
	?>
		<script> 
			//alert("INSERTING FAILED");
			window.location.href="marks1.php";
		</script>
   	<?php
}
?>