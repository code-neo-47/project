<?php
include('server.php');

$maid=$_GET['maid'];

$q="DELETE FROM marks where ma_id='$maid'";
$r=mysqli_query($con,$q);

if($r)
{
//header('location:view.php');
?>
<script>
confirm('DATA DELETED');
window.location.href="view_marks.php";
</script>
<?php	
}

else
{
	?>
<script>
confirm('PROBLEM');
window.location.href="view_marks.php";
</script>
<?php
}


?>