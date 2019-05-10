<?php
include('server.php');

$stid=$_GET['stid'];

$q="DELETE FROM student where st_id='$stid'";
$r=mysqli_query($con,$q);

if($r)
{
//header('location:view.php');
?>
<script>
confirm('DATA DELETED');
window.location.href="view_student.php";
</script>
<?php	
}

else
{
	?>
<script>
confirm('PROBLEM');
window.location.href="view_student.php";
</script>
<?php
}


?>